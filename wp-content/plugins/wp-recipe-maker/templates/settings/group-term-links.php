<?php
/**
 * Template for the plugin settings structure.
 *
 * @link       http://bootstrapped.ventures
 * @since      6.4.0
 *
 * @package    WP_Recipe_Maker
 * @subpackage WP_Recipe_Maker/templates/settings
 */

$term_links = array(
	'id' => 'termLinks',
	'icon' => 'link',
	'name' => __( 'Term Links', 'wp-recipe-maker' ),
	'required' => 'premium',
	'subGroups' => array(
		array(
			'name' => __( 'General Term Links', 'wp-recipe-maker' ),
			'description' => __( 'Term links can be set through the WP Recipe Maker > Manage > Recipe Fields page.', 'wp-recipe-maker' ),
			'settings' => array(
				array(
					'id' => 'term_links_open_in_new_tab',
					'name' => __( 'Open in New Tab', 'wp-recipe-maker' ),
					'description' => __( 'Open term links in a new tab.', 'wp-recipe-maker' ),
					'type' => 'toggle',
					'default' => false,
				),
				array(
					'id' => 'term_links_use_nofollow',
					'name' => __( 'Default Use Nofollow', 'wp-recipe-maker' ),
					'description' => __( 'Add the nofollow attribute to term links by default.', 'wp-recipe-maker' ),
					'type' => 'toggle',
					'default' => false,
				),
			),
		),
		array(
			'name' => __( 'Ingredient Links', 'wp-recipe-maker' ),
			'description' => __( 'Ingredient links can be set when editing a recipe or through the WP Recipe Maker > Manage > Recipe Fields > Ingredients page.', 'wp-recipe-maker' ),
			'documentation' => 'https://help.bootstrapped.ventures/article/29-ingredient-links',
			'settings' => array(
				array(
					'id' => 'ingredient_links_open_in_new_tab',
					'name' => __( 'Open in New Tab', 'wp-recipe-maker' ),
					'description' => __( 'Open ingredient links in a new tab.', 'wp-recipe-maker' ),
					'type' => 'toggle',
					'default' => false,
				),
				array(
					'id' => 'ingredient_links_use_nofollow',
					'name' => __( 'Default Use Nofollow', 'wp-recipe-maker' ),
					'description' => __( 'Add the nofollow attribute to ingredient links by default.', 'wp-recipe-maker' ),
					'type' => 'toggle',
					'default' => false,
				),
			),
		),
		array(
			'name' => __( 'Equipment Links', 'wp-recipe-maker' ),
			'description' => __( 'Equipment links can be set on the WP Recipe Maker > Manage > Recipe Fields > Equipment page.', 'wp-recipe-maker' ),
			'documentation' => 'https://help.bootstrapped.ventures/article/193-equipment-links',
			'settings' => array(
				array(
					'id' => 'equipment_links_open_in_new_tab',
					'name' => __( 'Open in New Tab', 'wp-recipe-maker' ),
					'description' => __( 'Open equipment links in a new tab.', 'wp-recipe-maker' ),
					'type' => 'toggle',
					'default' => false,
				),
				array(
					'id' => 'equipment_links_use_nofollow',
					'name' => __( 'Default Use Nofollow', 'wp-recipe-maker' ),
					'description' => __( 'Add the nofollow attribute to equipment links by default.', 'wp-recipe-maker' ),
					'type' => 'toggle',
					'default' => false,
				),
			),
		),
	),
);
