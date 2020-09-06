( function( $, Backbone, _, settings ) {
	var foodieNL = window.foodieNL || {};
	window.foodieNL = foodieNL;

	foodieNL.builder = {
		init: function() {
			this.builderView = '';
			this.previewView = '';
			this.builderModel = '';

			this.conversionFormulas = {
				'cup': {
					'ml': 236.588
				},
				'ml': {
					'cup': 0.00422675
				},
				'oz': {
					'g': 28.3495
				},
				'g': {
					'oz': 0.035274
				}
			};

			this.hideUnsupportedElements();

			this.createModel();
			this.createBuilderView();
			this.createPreviewView();
		},

		hideUnsupportedElements: function() {
			$( '.preview.button' ).hide();
		},

		createModel: function() {
			this.builderModel = new Backbone.Model( settings.post.meta );
		},

		createBuilderView: function() {
			var self = this;
			
			this.builderView = new foodieNL.builderView({ 
				el: '#foodie-nl-builder-edit',
				model: self.builderModel 
			});
		},

		createPreviewView: function() {
			var self = this;

			this.previewView = new foodieNL.previewView({
				el: '#foodie-nl-builder-preview',
				model: self.builderModel
			});
		}
	}

	foodieNL.builderView = Backbone.View.extend({
		template: wp.template( 'foodie-nl-builder-edit-template' ),

		initialize: function() {
			this.render();

			this.listenTo( this.model, 'change:fat', this.calculateCaloriesFromFat.bind(this) );
			this.listenTo( this.model, 'change:serving_unit', this.convertUnits.bind(this) );
			this.listenTo( this.model, 'change:serving_size', this.convertUnits.bind(this) );
			this.listenTo( this.model, 'change:include_conversion_unit', this.onIncludeConversionUnitChange.bind(this) );
			this.listenTo( this.model, 'change', this.updatePayload.bind(this) );
		},

		events: {
			'keyup input[type=number]': 'onFieldChange',
			'change input[type=number]': 'onFieldChange',
			'change input[type=checkbox]': 'onCheckboxChange',
			'change select': 'onFieldChange'
		},

		render: function() {
			this.$el.html( this.template( this.model.toJSON() ) );

			return this;
		},

		onFieldChange: function( e ) {
			e.stopPropagation();

			var $input = $(e.target);
			var value = $input.val();

			this.model.set( $input.attr('data-bind'), value );
			this.calculateDV();
		},

		onCheckboxChange: function( e ) {
			var $checkbox = $(e.target);

			if ( $checkbox.is(':checked') ) {
				this.model.set( $checkbox.attr('data-bind'), 1 );
			} else {
				this.model.set( $checkbox.attr('data-bind'), 0 );
			}
		},

		calculateCaloriesFromFat: function( model, value ) {
			var fat = parseInt( value, 10 );
			var caloriesFromFat;

			if ( fat >= 0 ) {
				if ( 0 === fat ) {
					caloriesFromFat = 0;
				} else {
					caloriesFromFat = fat * 9;
				}
			
				model.set( 'calories_from_fat', caloriesFromFat );
			} else {
				model.set( 'calories_from_fat', '' );
			}
		},

		calculateDV: function() {
			var fieldsToCalculate = [
				'fat',
				'saturated_fat',
				'carbohydrates',
				'dietary_fiber',
				'cholesterol',
				'sodium'
			];

			for ( var i = 0; i < fieldsToCalculate.length; i++ ) {
				var attribute = fieldsToCalculate[i];
				var value = this.model.get( attribute );
				var dv = settings.dv[attribute];
				var dvPercent = Math.ceil( value / dv * 100 );

				this.model.set( attribute + '_dv', dvPercent );
			}
		},

		convertUnits: function() {
			var servingSize = this.model.get( 'serving_size' );
			var servingUnit = this.model.get( 'serving_unit' );

			var $conversionUnitSection = $( '.foodie-nl__conversion-unit-section', this.$el );
			var $conversionTargetInput = $( 'span[data-unit-from=' + servingUnit + ']', $conversionUnitSection );
			
			$( 'span', $conversionUnitSection ).hide();
			$conversionTargetInput.show();

			this.doUnitConversion( servingSize, $conversionTargetInput.attr('data-unit-from'), $conversionTargetInput.attr('data-unit-to') );
		},

		doUnitConversion: function( value, unitFrom, unitTo ) {
			if ( ! value || ! unitFrom || ! unitTo ) {
				return;
			}

			var multiply = foodieNL.builder.conversionFormulas[unitFrom][unitTo];
			var result = Math.round( value * multiply );

			this.model.set( 'serving_size_conversion', result );
			this.model.set( 'serving_size_conversion_unit', unitTo );
		},

		onIncludeConversionUnitChange: function( model, value ) {
			this.convertUnits();

			model.trigger( 'conversion-unit-update' );
		},

		updatePayload: function( model ) {
			var json = model.toJSON();

			$( '[name=foodie_nl_payload]' ).val( JSON.stringify( json ) );
		}
	});

	foodieNL.previewView = Backbone.View.extend({
		template: wp.template( 'foodie-nl-builder-preview-template' ),

		initialize: function() {
			this.render();

			this.listenTo( this.model, 'change', this.onModelUpdate.bind(this) );
			this.listenTo( this.model, 'change:include_calories_from_fat', this.onIncludeCaloriesFromFatChange.bind(this) );
			this.listenTo( this.model, 'conversion-unit-update', this.toggleConversionUnit.bind(this) );
		},

		render: function() {
			this.$el.html( this.template( this.model.toJSON() ) );

			return this;
		},

		onModelUpdate: function( model ) {
			var changed = model.changedAttributes();
			var self = this;

			if ( changed ) {
				_.each( changed, function( value, attribute ) {
					$( '[data-bind=' + attribute + ']', self.$el ).text( value );
				});
			}
		},

		onIncludeCaloriesFromFatChange: function( model, value ) {
			if ( 1 == value ) {
				$( '.foodie-nl-label__calories-from-fat', this.$el ).show();
			} else {
				$( '.foodie-nl-label__calories-from-fat', this.$el ).hide();
			}
		},

		toggleConversionUnit: function() {
			$( '.foodie-nl-label__conversion', this.$el ).toggle();
		}
	});

	$( document ).ready( function() {
		foodieNL.builder.init();

		$( document ).on( 'click', '.foodie-nl__copy-to-clipboard', function( e ) {
			e.preventDefault();

			var $input = $(e.target).prev('input');
			$input.select();

			try {
				document.execCommand( 'copy' );
			} catch( e ) {}
		} );
	} );
} ) ( jQuery, Backbone, _, _foodieNL );