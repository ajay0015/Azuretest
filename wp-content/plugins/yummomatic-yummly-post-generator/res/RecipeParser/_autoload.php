<?php

/**
 * Autoloader routine
 *
 * @param string Class name
 */
function RecipeParser_Autoload($class_name) {
	if (!class_exists($class_name, false)) {
        global $wp_filesystem;
        if ( ! is_a( $wp_filesystem, 'WP_Filesystem_Base') ){
            include_once(ABSPATH . 'wp-admin/includes/file.php');$creds = request_filesystem_credentials( site_url() );
            wp_filesystem($creds);
        }
        $class_file_path = str_replace('_', '/', $class_name) . '.php';
        $file_exists = dirname(__FILE__) . "/" . $class_file_path;
        if($wp_filesystem->exists($file_exists))
        {
            require($class_file_path);
        }
	}
}

spl_autoload_register('RecipeParser_Autoload');

?>
