<?php

class RecipeParser_Parser_Cookingcom {

    static public function parse($html, $url) {
        $recipe = RecipeParser_Parser_MicrodataSchema::parse($html, $url);

        libxml_use_internal_errors(true);
        if(function_exists('mb_convert_encoding'))
        {
            $html = mb_convert_encoding($html, 'HTML-ENTITIES', "UTF-8");
        }
        $doc = new DOMDocument();
        $doc->loadHTML('<?xml encoding="UTF-8">' . $html);
        $xpath = new DOMXPath($doc);

        return $recipe;
    }

}
