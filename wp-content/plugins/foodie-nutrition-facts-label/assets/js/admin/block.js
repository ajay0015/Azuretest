( function( settings ) {
	var el = wp.element.createElement;
	var registerBlockType = wp.blocks.registerBlockType;
	var ServerSideRender = wp.components.ServerSideRender;
	var SelectControl = wp.components.SelectControl;
	var Placeholder = wp.components.Placeholder;

	var blockID = 'wpfoodie/foodie-nutrition-label';
	var options = Object
		.keys( settings.labels )
		.map( function( key ) {
			return { label: settings.labels[key], value: key };
		} );

	options.reverse().unshift( { label: settings.i18n.select.default, value: '' } );

	var ComponentPlaceholder = function( props ) {
		var component =
			el( Placeholder, {
				label: settings.i18n.select.placeholder,
			},
			el( SelectControl, {
				value: '',
				options: options,
				onChange: function( value ) {
					props.setAttributes( { id: value } );
				}
			} )
			);

		return component;
	};

	var ComponentLabel = function( props ) {
		var component = [
			el( ServerSideRender, {
				block: blockID,
				attributes: props.attributes,
			} ),
		];

		return component;
	};

	registerBlockType( blockID, {
		title: settings.block_props.title,
		description: settings.block_props.description,
		category: settings.block_props.category,
		icon: settings.block_props.icon,
		keywords: settings.block_props.keywords,
		supports: {
			html: false
		},

		edit: function( props ) {
			if ( props.attributes.id ) {
				return [ ComponentLabel( props ) ];
			}

			return [ ComponentPlaceholder( props ) ];
		},

		save: function() {
			return null;
		},
	} );

} )( _foodieGutenbergBlockSettings );