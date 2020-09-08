<?php
if ( ! function_exists( 'foodie_nl_get_prefixed_meta_key' ) ) :

	function foodie_nl_get_prefixed_meta_key( $key ) {
		if ( empty( $key ) ) {
			return;
		}

		$key = '_foodie_nl_' . $key;

		return $key;
	}

endif;

if ( ! function_exists( 'foodie_nl_get_unprefixed_meta_key' ) ) :

	function foodie_nl_get_unprefixed_meta_key( $key ) {
		if ( empty( $key ) ) {
			return;
		}

		$key = str_replace( '_foodie_nl_', '', $key );

		return $key;
	}

endif;

if ( ! function_exists( 'foodie_nl_get_raw_meta' ) ) :

	function foodie_nl_get_raw_meta( $post_meta ) {
		if ( empty( $post_meta ) ) {
			return;
		}

		$raw_meta = array();

		$post_meta = array_map( 'reset', $post_meta );
		$post_meta = array_map( 'maybe_unserialize', $post_meta );

		foreach( $post_meta as $key => $meta ) {
			$unprefixed_key = foodie_nl_get_unprefixed_meta_key( $key );
			$raw_meta[$unprefixed_key] = $meta;
		}

		return $raw_meta;
	}

endif;