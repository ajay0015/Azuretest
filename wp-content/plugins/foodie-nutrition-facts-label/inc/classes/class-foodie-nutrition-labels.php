<?php
class Foodie_Nutrition_Labels {
	public $post_type = 'foodie-nl';

	public function initialize() {
		// General
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'current_screen', array( $this, 'admin_screens' ) );

		// Styles and scripts
		add_action( 'init', array( $this, 'register_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'frontend_enqueue_styles' ) );

		// Gutenberg
		add_action( 'init', array( $this, 'register_gutenberg_block' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'add_gutenberg_assets' ) );

		// All Labels table
		add_filter( "manage_{$this->post_type}_posts_columns", array( $this, 'table_columns_headers' ), 999 );
		add_filter( "manage_{$this->post_type}_posts_custom_column", array( $this, 'table_columns_content' ), 10, 2 );

		// Shortcode
		add_shortcode( 'foodie-nl', array( $this, 'handle_shortcode' ) );

		// Require helpers
		require_once( get_foodie_nl_inc_folder() . '/helpers.php' );
		require_once( get_foodie_nl_inc_folder() . '/helpers-template.php' );
	}

	public function register_post_types() {
		$labels = array(
			'name'                  => __( 'Nutrition Labels', 'foodie-nl' ),
			'singular_name'         => __( 'Label', 'foodie-nl' ),
			'menu_name'             => __( 'Nutrition Labels', 'foodie-nl' ),
			'name_admin_bar'        => __( 'Label', 'foodie-nl' ),
			'all_items'             => __( 'All Labels', 'foodie-nl' ),
			'add_new_item'          => __( 'Add New Label', 'foodie-nl' ),
			'add_new'               => __( 'Add New', 'foodie-nl' ),
			'new_item'              => __( 'New Label', 'foodie-nl' ),
			'edit_item'             => __( 'Edit Label', 'foodie-nl' ),
			'update_item'           => __( 'Update Label', 'foodie-nl' ),
			'view_item'             => __( 'View Label', 'foodie-nl' ),
			'view_items'            => __( 'View Labels', 'foodie-nl' ),
			'search_items'          => __( 'Search Label', 'foodie-nl' ),
			'not_found'             => __( 'Not found', 'foodie-nl' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'foodie-nl' )
		);

		$args = array(
			'label'                 => __( 'Nutrition Label', 'foodie-nl' ),
			'labels'                => $labels,
			'supports'              => array( 'title' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_in_rest'          => false,
			'show_in_menu'          => true,
			'menu_icon'             => 'dashicons-analytics',
			'can_export'            => true,
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			'capability_type'       => 'page',
		);

		register_post_type( $this->post_type, $args );
	}

	public function register_styles() {
		wp_register_style(
			'foodie-nl-label',
			get_foodie_nl_plugin_url() . '/assets/css/label.css',
			array(),
			FOODIE_NL_VERSION
		);
	}

	public function admin_screens( $current_screen ) {
		if ( ! isset( $current_screen->post_type ) ) {
			return;
		}

		if ( 'foodie-nl' === $current_screen->post_type ) {
			require_once( get_foodie_nl_inc_folder() . '/classes/class-foodie-nl-builder.php' );
		}
	}

	public function get_daily_values() {
		return array(
			'fat' => 65,
			'saturated_fat' => 20,
			'cholesterol' => 300,
			'sodium' => 2400,
			'carbohydrates' => 300,
			'dietary_fiber' => 25
		);
	}

	public function handle_shortcode( $attrs ) {
		if ( ! isset( $attrs['id'] ) ) {
			return;
		}

		$label_id = $attrs['id'];
		$label = get_post( $label_id );

		ob_start();
			require( get_foodie_nl_inc_folder() . '/templates/label.php' );
		$html = ob_get_clean();

		return $html;
	}

	public function frontend_enqueue_styles() {
		wp_enqueue_style( 'foodie-nl-label' );
	}

	public function add_gutenberg_assets() {
		wp_enqueue_script(
			'foodie-nl-block',
			get_foodie_nl_plugin_url() . '/assets/js/admin/block.js',
			array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-editor' )
		);

		wp_enqueue_style(
			'foodie-nl-label'
		);

		$labels = get_posts(
			array(
				'post_type' => 'foodie-nl',
				'post_status' => 'publish'
			)
		);

		$labels = wp_list_pluck( $labels, 'post_title', 'ID' );

		$data = array(
			'labels' => $labels,
			'block_props' => array(
				'title' => __( 'Nutrition Label', 'foodie-nl' ),
				'description' => __( 'Add nutrition label to your page.', 'foodie-nl' ),
				'category' => 'widgets',
				'icon' => 'analytics',
				'keywords' => array(
					'label', 'nutrition', 'foodie'
				)
			),
			'i18n' => array(
				'select' => array(
					'default' => __( '- Select -', 'foodie-nl' ),
					'placeholder' => __( 'Select nutrition label from the dropdown:', 'foodie-nl' )
				)
			)
		);

		wp_localize_script( 'foodie-nl-block', '_foodieGutenbergBlockSettings', $data );
	}

	public function render_gutenberg_block( $attrs ) {
		return Foodie_Nutrition_Labels()->handle_shortcode( $attrs );
	}

	public function register_gutenberg_block() {
		register_block_type( 'wpfoodie/foodie-nutrition-label', array(
			'attributes' => array(
				'id' => array(
					'type' => 'int'
				)
			),
			'editor_script' => 'foodie-nl-block',
			'render_callback' => array( $this, 'render_gutenberg_block' ),
		) );
	}

	public function table_columns_headers( $columns ) {
		$foodie_nl_columns = array(
			'cb' => $column['cb'],
			'title' => $columns['title'],
			'shortcode' => __( 'Shortcode', 'foodie-nl' ),
			'date' => $columns['date']
		);

		$columns = $foodie_nl_columns;

		return $columns;
	}

	public function table_columns_content( $column, $id ) {
		switch ( $column ) {
			case 'shortcode':
				$shortcode = '[foodie-nl id="' . $id . '"]';
				echo $shortcode;
				break;
		}
	}
}

if ( ! function_exists( 'Foodie_Nutrition_Labels' ) ) :

	function Foodie_Nutrition_Labels() {
		global $foodie_nutrition_labels;
	
		if ( is_null( $foodie_nutrition_labels ) ) {
			$foodie_nutrition_labels = new Foodie_Nutrition_Labels();
		}
	
		return $foodie_nutrition_labels;
	}
	
endif;