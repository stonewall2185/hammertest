<?php
if ( !defined('ABSPATH') ){ die(); } //Exit if accessed directly

if ( !trait_exists('Assets') ){
    trait Assets {
        public function hooks(){
            //Register styles/scripts
            add_action('init', array($this, 'registerScripts'));

            //Enqueue styles/scripts
            add_action('wp_enqueue_scripts', array($this, 'hamEnqueueScripts'));
        }

        /* - - - - - - - - - - - - - - - - - - - - - - - - - -
        /* REGISTER SCRIPTS / STYLES
        */
        public function registerScripts(){
            // this is to register the script/style, and then call it later dynamically (if needed) in enqueue_scripts

            $theme_version = wp_get_theme()->get( 'Version' );

            //Stylesheets
            wp_register_style( 'hammer-style', get_template_directory_uri().'/dist/css/style.css', array(), $theme_version );
        }

        /* - - - - - - - - - - - - - - - - - - - - - - - - - -
        /* ENQUEUE SCRIPTS / STYLES
        */
        public function hamEnqueueScripts($hook){
            global $wp_query;
            
            $theme_version = wp_get_theme()->get( 'Version' );

            //Stylesheets
            wp_enqueue_style('hammer-style');

            $ham_google_fonts = hammer()->get_admin_option('hammer_setting_fonts_google');

            if($ham_google_fonts !== '') :
                wp_enqueue_style('hammer-google-fonts', $ham_google_fonts, false);
            endif;

            // if there is a better spot / place for this - lets move it
            wp_enqueue_script( 'jquery' );

            if ( !is_admin() ) {
                wp_enqueue_script( 'hammer-footer', get_template_directory_uri().'/dist/js/scripts.min.js', 'jquery', $theme_version, true );
            }
        }

        /* - - - - - - - - - - - - - - - - - - - - - - - - - -
        /* GUTENBERG SCRIPTS
        */
        public function ham_gutenberg_scripts() {
            wp_enqueue_script(
                'ham_gutenberg_editor', 
                get_stylesheet_directory_uri() . '/dist/js/editor.js', 
                array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' )
            );
        }
    } // trait
} // if trait