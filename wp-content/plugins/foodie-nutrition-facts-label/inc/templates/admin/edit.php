<script type="text/html" id="tmpl-foodie-nl-builder-edit-template">
	<h3><?php _e( 'General', 'foodie-nl' ); ?></h3>

	<div class="foodie-nl-builder__group foodie-nl-builder__group--third">
		<div>
			<p>
				<label for="foodie-nl-serving_size"><?php _e( 'Serving size', 'foodie-nl' ); ?></label>
				<input type="number" id="foodie-nl-serving_size" data-bind="serving_size" class="foodie-nl-input--medium-number" value="{{ data.serving_size }}"> 
					<select style="position: relative; top: -2px" data-bind="serving_unit">
						<option value="g"<# if ( 'g' === data.serving_unit ) { #> selected<# } #>>g</option>
						<option value="oz"<# if ( 'oz' === data.serving_unit ) { #> selected<# } #>>oz</option>
						<option value="cup"<# if ( 'cup' === data.serving_unit ) { #> selected<# } #>>cup</option>
						<option value="ml"<# if ( 'ml' === data.serving_unit ) { #> selected<# } #>>ml</option>
					</select>
			</p>
			<p class="foodie-nl__conversion-unit-section">
				<label>
				<input type="checkbox" value="1" data-bind="include_conversion_unit"<# if ( 1 == data.include_conversion_unit ) { #> checked<# } #>>
					<?php _e( 'Include conversion to', 'foodie-nl' ); ?> 
					<span data-unit-from="g" data-unit-to="oz"<# if ( 'g' != data.serving_unit ) { #>style="display: none"<# } #>>oz</span>
					<span data-unit-from="oz" data-unit-to="g"<# if ( 'oz' != data.serving_unit ) { #>style="display: none"<# } #>>g</span>
					<span data-unit-from="ml" data-unit-to="cup"<# if ( 'ml' != data.serving_unit ) { #>style="display: none"<# } #>>cups</span>
					<span data-unit-from="cup" data-unit-to="ml"<# if ( 'cup' != data.serving_unit ) { #>style="display: none"<# } #>>ml</span>
				</label>
			</p>
		</div>
		<p>
			<label for="foodie-nl-servings_per_container"><?php _e( 'Servings per container', 'foodie-nl' ); ?></label>
			<input type="number" id="foodie-nl-servings_per_container" data-bind="servings_per_container" class="foodie-nl-input--small-number" minlength="1" min="1" placeholder="1" value="{{ data.servings_per_container }}">
		</p>
	</div>

	<div class="foodie-nl-builder__group foodie-nl-builder__group--third">
		<p>
			<label for="foodie-nl-calories"><?php _e( 'Calories', 'foodie-nl' ); ?></label>
			<input type="number" data-bind="calories" class="foodie-nl-input--medium-number" value="{{ data.calories }}" min="0">
		</p>
		<p style="align-self: center">
			<label>
				<input type="checkbox" value="1" data-bind="include_calories_from_fat"<# if ( 1 == data.include_calories_from_fat ) { #> checked<# } #>> <?php _e( 'Include', 'foodie-nl' ); ?> <em><?php _e( 'Calories from Fat', 'foodie-nl' ); ?></em>
			</label>
		</p>
	</div>

	<h3><?php _e( 'Macronutrients', 'foodie-nl' ); ?> <span>(<?php _e( 'all values in', 'foodie-nl' ); ?> <i>g</i>)</span></h3>

	<div class="foodie-nl-builder__group foodie-nl-builder__group--third">
		<div>
			<p>
				<label for="foodie-nl-fat"><?php _e( 'Fat', 'foodie-nl' ); ?></label>
				<input type="number" data-bind="fat" class="foodie-nl-input--medium-number" value="{{ data.fat }}" min="0">
			</p>
			<p>
				<label for="foodie-nl-saturated_fat"><?php _e( 'Saturated Fat', 'foodie-nl' ); ?></label>
				<input type="number" data-bind="saturated_fat" class="foodie-nl-input--medium-number" value="{{ data.saturated_fat }}" min="0">
			</p>
			<p>
				<label for="foodie-nl-trans_fat"><?php _e( 'Trans Fat', 'foodie-nl' ); ?></label>
				<input type="number" data-bind="trans_fat" class="foodie-nl-input--medium-number" value="{{ data.trans_fat }}" min="0">
			</p>
		</div>
		<div>
			<p>
				<label for="foodie-nl-carbohydrates"><?php _e( 'Total Carbohydrate', 'foodie-nl' ); ?></label>
				<input type="number" data-bind="carbohydrates" class="foodie-nl-input--medium-number" value="{{ data.carbohydrates }}" min="0">
			</p>
			<p>
				<label for="foodie-nl-dietary_fiber"><?php _e( 'Dietary Fiber', 'foodie-nl' ); ?></label>
				<input type="number" data-bind="dietary_fiber" class="foodie-nl-input--medium-number" value="{{ data.dietary_fiber }}" min="0">
			</p>
			<p>
				<label for="foodie-nl-sugars"><?php _e( 'Sugars', 'foodie-nl' ); ?></label>
				<input type="number" data-bind="sugars" class="foodie-nl-input--medium-number" value="{{ data.sugars }}" min="0">
			</p>
		</div>
		<div>
			<p>
				<label for="foodie-nl-protein"><?php _e( 'Protein', 'foodie-nl' ); ?></label>
				<input type="number" data-bind="protein" class="foodie-nl-input--medium-number" value="{{ data.protein }}" min="0">
			</p>
		</div>
	</div>

	<h3><?php _e( 'Other nutrients', 'foodie-nl' );?> <span>(<?php _e( 'all values in', 'foodie-nl' ); ?> <i>mg</i>)</h3>

	<div class="foodie-nl-builder__group foodie-nl-builder__group--third">
		<div>
			<p>
				<label for="foodie-nl-cholesterol"><?php _e( 'Cholesterol', 'foodie-nl' ); ?></label>
				<input type="number" data-bind="cholesterol" class="foodie-nl-input--medium-number" value="{{ data.cholesterol }}" min="0">
			</p>
		</div>
		<div>
			<p>
				<label for="foodie-nl-sodium"><?php _e( 'Sodium', 'foodie-nl' ); ?></label>
				<input type="number" data-bind="sodium" class="foodie-nl-input--medium-number" value="{{ data.sodium }}" min="0">
			</p>
		</div>
	</div>

	<input type="hidden" name="foodie_nl_payload" value="">
</script>