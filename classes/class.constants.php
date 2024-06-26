<?php namespace monotone;

class Constants {
    var string $assets = '/assets';
    var string $build = '/assets/build';
    var string $adminBuild = '/assets/build-admin'; // Added property for admin build path
    var string $classes = '/classes';

    public function __construct() {
        add_action( 'after_setup_theme', [ $this, 'add_constants' ], 0 );
    }

    /**
     * Add constants to be used throughout the theme.
     */
    public function add_constants() {
        define( 'THEME_PATH', get_template_directory() );
        define( 'THEME_ASSETS_PATH', get_template_directory() . $this->assets );
        define( 'THEME_ASSETS_URI', get_template_directory_uri() . $this->assets );
        define( 'THEME_BUILD_PATH', get_template_directory() . $this->build );
        define( 'THEME_BUILD_URI', get_template_directory_uri() . $this->build );
        define( 'THEME_ADMIN_BUILD_PATH', get_template_directory() . $this->adminBuild ); // Added constant for admin build path
        define( 'THEME_ADMIN_BUILD_URI', get_template_directory_uri() . $this->adminBuild ); // Added constant for admin build URI
        define( 'THEME_CLASSES_PATH', get_template_directory() . $this->classes );
        define( 'THEME_CLASSES_URI', get_template_directory_uri() . $this->classes );
        define( 'CURRENT_LANG', apply_filters( 'wpml_current_language', null ) ?: 'en' );
    }
}


new Constants();
