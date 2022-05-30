<?php

class View {

    /**
     * load config array into View from file 
     * @param string $file config file name
     * @return void
     */
    public static function loadConfig($file) {
        
    }

    /**
     * 
     * @param string $viewName view's name,eg default.article.index
     * @param array $vars
     * @return string 
     */
    public static function make($viewName, $vars) {
        
    }

    /**
     * 
     * @param string $viewName view's name,eg default.article.index
     * @return string return the dest view's relative path
     */
    public static function compile($viewName) {
        
    }

    /**
     * 
     * @param bool $bool
     * @return void
     */
    public static function setForceCompile($bool = true) {
        
    }

    public static function getForceCompile() {
        
    }

    public static function setSkipCommentTags($bool = true) {
        
    }

    public static function getSkipCommentTags() {
        
    }

}
