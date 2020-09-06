<?php
if ( ! function_exists( 'foodie_nl_get_field' ) ):

	function foodie_nl_get_field( $post_id, $key ) {
		$value = get_post_meta( $post_id, foodie_nl_get_prefixed_meta_key( $key ), true );
		
		return $value;
	}

endif;

if ( ! function_exists( 'foodie_nl_the_field' ) ):

	function foodie_nl_the_field( $post_id, $key ) {
		global $current_screen;

		$value = '';

		if ( ! empty( $post_id ) ) {
			$value = foodie_nl_get_field( $post_id, $key );
		}

		if ( is_admin() && 'foodie-nl' === $current_screen->post_type ) {
			$value = '<span data-bind="'. $key .'">{{ data.' . $key . ' }}</span>';
		}

		echo $value;
	}

endif;

if ( ! function_exists( 'foodie_nl_the_calories_from_fat' ) ):

	function foodie_nl_the_calories_from_fat( $post_id ) {
		global $current_screen;

		if ( ! empty( $post_id ) ) {
			$value = foodie_nl_get_field( $post_id, 'calories_from_fat' );
		}

		if ( is_admin() && 'foodie-nl' === $current_screen->post_type ) {
			$value = '<span data-bind="calories_from_fat">{{ data.calories_from_fat }}</span>';
		}

		echo $value;
	}

endif;