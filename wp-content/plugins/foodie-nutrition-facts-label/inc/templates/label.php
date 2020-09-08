<?php 
if ( isset( $label ) ) {
	$post_id = $label->ID;
} else {
	$post_id = ( get_the_ID() ) ? get_the_ID() : ''; 
}
?>
<section class="foodie-nl-label">
	<header class="foodie-nl-label__header">
		<h1 class="foodie-nl-label__title"><?php _e( 'Nutrition Facts', 'foodie-nl' ); ?></h1>
		<p>
			<?php _e( 'Serving size', 'foodie-nl' ); ?> <?php foodie_nl_the_field( $post_id, 'serving_size' ); ?> <?php foodie_nl_the_field( $post_id, 'serving_unit' ); ?> 

			<?php if ( is_admin() ) : ?>
				<span class="foodie-nl-label__conversion"<# if ( 1 != data.include_conversion_unit ) { #> style="display: none"<# } #>>(<?php foodie_nl_the_field( $post_id, 'serving_size_conversion' ); ?> <?php foodie_nl_the_field( $post_id, 'serving_size_conversion_unit' ); ?>)</span>
			<?php else: ?>
				<?php if ( 1 == foodie_nl_get_field( $post_id, 'include_conversion_unit' ) ) : ?>
					<span class="foodie-nl-label__conversion">(<?php foodie_nl_the_field( $post_id, 'serving_size_conversion' ); ?> <?php foodie_nl_the_field( $post_id, 'serving_size_conversion_unit' ); ?>)</span>
			<?php endif; ?>
			<?php endif; ?>
		</p>
		<p><?php _e( 'Servings per container', 'foodie-nl' ); ?> <?php foodie_nl_the_field( $post_id, 'servings_per_container' ); ?></p>
	</header>
	<table class="foodie-nl-label__table foodie-nl-label-table">
		<thead>
			<tr>
				<th colspan="3" class="foodie-nl-label-table__meta">
					<?php _e( 'Amount per serving', 'foodie-nl' ); ?>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th colspan="2">
					<b><?php _e( 'Calories', 'foodie-nl' ); ?></b> <?php foodie_nl_the_field( $post_id, 'calories' ); ?>
				</th>
				<td>
					<p class="foodie-nl-label__calories-from-fat"><?php _e( 'Calories from Fat', 'foodie-nl' ); ?> <?php foodie_nl_the_calories_from_fat( $post_id ); ?></p>
				</td>
			</tr>
			<tr class="thick-border-top">
				<td colspan="3" class="foodie-nl-label-table__meta">
					<b><?php _e( '% Daily Value*', 'foodie-nl' ); ?></b>
				</td>
			</tr>
			<tr>
				<th colspan="2">
					<b><?php _e( 'Total Fat', 'foodie-nl' ); ?></b> <?php foodie_nl_the_field( $post_id, 'fat' ); ?>g
				</th>
				<td>
					<b><?php foodie_nl_the_field( $post_id, 'fat_dv' ); ?>%</b>
				</td>
			</tr>
			<tr>
				<td class="foodie-nl-label__spacer"></td>
				<th>
					<?php _e( 'Saturated Fat', 'foodie-nl' ); ?> <?php foodie_nl_the_field( $post_id, 'saturated_fat' ); ?>g
				</th>
				<td>
					<b><?php foodie_nl_the_field( $post_id, 'saturated_fat_dv' ); ?>%</b>
				</td>
			</tr>
			<tr>
				<td class="foodie-nl-label__spacer"></td>
				<th>
					<?php _e( 'Trans Fat', 'foodie-nl' ); ?> <?php foodie_nl_the_field( $post_id, 'trans_fat' ); ?>g
				</th>
				<td></td>
			</tr>
			<tr>
				<th colspan="2">
					<b><?php _e( 'Cholesterol', 'foodie-nl' ); ?></b> <?php foodie_nl_the_field( $post_id, 'cholesterol' ); ?>mg
				</th>
				<td>
					<b><?php foodie_nl_the_field( $post_id, 'cholesterol_dv' ); ?>%</b>
				</td>
			</tr>
			<tr>
				<th colspan="2">
					<b><?php _e( 'Sodium', 'foodie-nl' ); ?></b> <?php foodie_nl_the_field( $post_id, 'sodium' ); ?>mg
				</th>
				<td>
					<b><?php foodie_nl_the_field( $post_id, 'sodium_dv' ); ?>%</b>
				</td>
			</tr>
			<tr>
				<th colspan="2">
					<b><?php _e( 'Total Carbohydrate', 'foodie-nl' ); ?></b> <?php foodie_nl_the_field( $post_id, 'carbohydrates' ); ?>g
				</th>
				<td>
					<b><?php foodie_nl_the_field( $post_id, 'carbohydrates_dv' ); ?>%</b>
				</td>
			</tr>
			<tr>
				<td class="foodie-nl-label__spacer"></td>
				<th>
					<?php _e( 'Dietary Fiber', 'foodie-nl' ); ?> <?php foodie_nl_the_field( $post_id, 'dietary_fiber' ); ?>g
				</th>
				<td>
					<b><?php foodie_nl_the_field( $post_id, 'dietary_fiber_dv' ); ?>%</b>
				</td>
			</tr>
			<tr>
				<td class="foodie-nl-label__spacer"></td>
				<th>
					<?php _e( 'Sugars', 'foodie-nl' ); ?> <?php foodie_nl_the_field( $post_id, 'sugars' ); ?>g
				</th>
				<td></td>
			</tr>
			<tr class="thick-border-bottom">
				<th colspan="2">
					<b><?php _e( 'Protein', 'foodie-nl' ); ?></b> <?php foodie_nl_the_field( $post_id, 'protein' ); ?>g
				</th>
				<td></td>
			</tr>
		</tbody>
	</table>
	<p class="foodie-nl-label__info">* <?php _e( 'Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs.', 'foodie-nl' ); ?>
</section>