<?php
class Foodie_Nutrition_Labels_Build {

	private static $instance;

	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		self::$instance->hook();

		return self::$instance;
	}

	public function hook() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_styles' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
		add_action( 'admin_footer', array( $this, 'print_templates' ) );

		add_action( 'save_post', array( $this, 'save_meta' ) );
	}

	public function get_default_meta() {
		return array(
			'serving_size' => '',
			'include_conversion_unit' => 0,
			'serving_size_conversion' => '',
			'serving_size_conversion_unit' => '',
			'servings_per_container' => '1',
			'serving_unit' => 'g',
			'calories' => '',
			'include_calories_from_fat' => 1,
			'calories_from_fat' => '',
			'fat' => '',
			'fat_dv' => '',
			'saturated_fat' => '',
			'saturated_fat_dv' => '',
			'trans_fat' => '',
			'carbohydrates' => '',
			'carbohydrates_dv' => '',
			'dietary_fiber' => '',
			'dietary_fiber_dv' => '',
			'sugars' => '',
			'protein' => '',
			'cholesterol' => '',
			'cholesterol_dv' => '',
			'sodium' => '',
			'sodium_dv' => ''
		);
	}

	public function enqueue_admin_styles() {
		wp_register_style(
			'foodie-nl-builder',
			get_foodie_nl_plugin_url() . '/assets/css/builder.css',
			array(),
			FOODIE_NL_VERSION
		);

		$current_screen = get_current_screen();

		if ( Foodie_Nutrition_Labels()->post_type === $current_screen->post_type ) {
			wp_enqueue_style( 'foodie-nl-builder' );
			wp_enqueue_style( 'foodie-nl-label' );
		}
	}

	public function enqueue_admin_scripts() {
		wp_register_script(
			'foodie-nl-builder',
			get_foodie_nl_plugin_url() . '/assets/js/admin/builder.js',
			array( 'wp-util', 'jquery', 'backbone', 'underscore' ),
			FOODIE_NL_VERSION
		);
		
		$post_id = get_the_ID();
		$post_data = get_post( $post_id, ARRAY_A );
		$post_meta = foodie_nl_get_raw_meta( get_post_meta( $post_id ) );
		$post_data['meta'] = wp_parse_args( $post_meta, $this->get_default_meta() );

		wp_localize_script(
			'foodie-nl-builder',
			'_foodieNL',
			array(
				'post' => $post_data,
				'dv' => Foodie_Nutrition_Labels()->get_daily_values()
			)
		);

		$current_screen = get_current_screen();

		if ( Foodie_Nutrition_Labels()->post_type === $current_screen->post_type ) {
			wp_enqueue_script( 'foodie-nl-builder' );
		}
	}

	public function add_meta_boxes() {
		global $post;

		add_meta_box(
			'foodie-nl-builder',
			__( 'Nutrition Label', 'foodie-nl' ),
			array( $this, 'create_wrap' ),
			'foodie-nl',
			'normal',
			'default'
		);

		if ( 'foodie-nl' === $post->post_type ) {
			if ( 'publish' === $post->post_status ) {
				add_meta_box(
					'foodie-nl-shortcode',
					__( 'Add label to your page', 'foodie-nl' ),
					array( $this, 'shortcode_meta_box' ),
					'foodie-nl',
					'side',
					'default'
				);
			}

			add_meta_box(
				'foodie-nl-support',
				__( 'Support', 'foodie-nl' ),
				array( $this, 'support_meta_box' ),
				'foodie-nl',
				'side',
				'default'
			); 
		}
	}

	public function save_meta( $post_id ) {
		if ( wp_is_post_revision( $post_id ) ) {
			return;
		}

		if ( isset( $_POST['foodie_nl_payload'] ) ) {
			$default_meta = $this->get_default_meta();

			$foodie_nl_payload = json_decode( stripslashes( $_POST['foodie_nl_payload'] ) );

			if ( ! empty( $foodie_nl_payload ) ) {
				foreach ( $foodie_nl_payload as $key => $value ) {
					if ( isset( $default_meta[$key] ) ) {
						update_post_meta( $post_id, foodie_nl_get_prefixed_meta_key( $key ), $value );
					}
				}
			}
		}
	}

	public function create_wrap() {
		include get_foodie_nl_inc_folder() . '/templates/admin/builder.php';
	}

	public function shortcode_meta_box() {
		include get_foodie_nl_inc_folder() . '/templates/admin/shortcode-meta-box.php';
	}

	public function support_meta_box() {
		include get_foodie_nl_inc_folder() . '/templates/admin/support-meta-box.php';
	}

	public function print_templates() {
		include( get_foodie_nl_inc_folder() . '/templates/admin/edit.php' );
		include( get_foodie_nl_inc_folder() . '/templates/admin/label.php' );
	}
}

Foodie_Nutrition_Labels_Build::instance();