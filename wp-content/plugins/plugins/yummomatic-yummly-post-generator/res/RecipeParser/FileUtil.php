<?php

class FileUtil {

    public static function tempFilenameFromUrl($url) {
        $hostname = parse_url($url, PHP_URL_HOST);
        $hostname = str_replace(".", "_", $hostname);
        $basename = "onetsp_{$hostname}_" . substr(md5($url), 0, 8);
        $filename = sys_get_temp_dir() . "/" . $basename;
        return $filename;
    }
    
    public static function downloadPage($url) {
        $user_agent = "Onetsp-RecipeParser/0.1 (+https://github.com/onetsp/RecipeParser)";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 4);
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);

        $html = curl_exec($ch);
        curl_close($ch);

        return $html;
    }

    public static function downloadRecipeWithCache($url, $strip_script_tags=true) {
        $cache_ttl = 86400 * 3;
        global $wp_filesystem;
        if ( ! is_a( $wp_filesystem, 'WP_Filesystem_Base') ){
            include_once(ABSPATH . 'wp-admin/includes/file.php');$creds = request_filesystem_credentials( site_url() );
            wp_filesystem($creds);
        }
        // Target filename
        $filename = FileUtil::tempFilenameFromUrl($url);
        if (!$strip_script_tags) {
            $filename .= "_noscript";
        }

        // Only fetch 1x per day
        if ($wp_filesystem->exists($filename)
            && $wp_filesystem->size($filename) > 0
            && (time() - $wp_filesystem->mtime($filename) < $cache_ttl)
        ) {
            error_log("Found file in cache: $filename");
            $html = $wp_filesystem->get_contents($filename);

        } else {
            // Fetch and cleanup the HTML
            error_log("Downloading recipe from url: $url");

            $html = FileUtil::downloadPage($url);
            $html = RecipeParser_Text::forceUTF8($html);
            $html = RecipeParser_Text::cleanupClippedRecipeHtml($html, $strip_script_tags);

            // Append some notes to the HTML
            $comments = RecipeParser_Text::getRecipeMetadataComment($url, "curl");
            $html = $comments . "\n\n" . $html;

            error_log("Saving recipe to file $filename");
            $wp_filesystem->put_contents($filename, $html);
        }

        return $html;
    }

}
