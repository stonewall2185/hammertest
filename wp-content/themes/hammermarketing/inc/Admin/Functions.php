<?php
if (!defined('ABSPATH')){ die(); } //Exit if accessed directly

if (!trait_exists('Functions')) {
    trait Functions {
        public function hooks() {
            add_action('after_setup_theme', array($this, 'theme_setup'));

            // FOLLOW THIS FORMAT FOR ADDING ACTIONS / FILTERS
            // add_action('example', array($this,'custom_name_here'), 1);
        }

        function custom_name_here() {
            // function here
        }
        
        /**
        /* THEME SETUP
        */
        public function theme_setup() {
            load_theme_textdomain( 'weidenhammer' );
            // ADD THEME SUPPORTS
            add_theme_support( 'post-thumbnails' );
            add_theme_support( 'html5', array('script', 'style'));
            add_theme_support( 'title-tag' );
            add_theme_support( 'align-wide' );

            // IMAGE SIZES
            // add_image_size('custom', 512, 512, 1);
            
            // REGISTER NAV MENUS
            register_nav_menus( array(
                'primary'   => __('Primary Menu', 'weidenhammer' ),
                'footer' => __('Footer Menu', 'weidenhammer' ),
            ));
        }

       /**
       /* HEX TO RGB
       */
        function hex2rgb($hex) {
            $hex = str_replace("#", "", $hex);

            if(strlen($hex) === 3) {
                $r = hexdec(substr($hex,0,1).substr($hex,0,1));
                $g = hexdec(substr($hex,1,1).substr($hex,1,1));
                $b = hexdec(substr($hex,2,1).substr($hex,2,1));
            } else {
                $r = hexdec(substr($hex,0,2));
                $g = hexdec(substr($hex,2,2));
                $b = hexdec(substr($hex,4,2));
            }
            $rgb = array($r, $g, $b);
            return implode(",", $rgb); // returns the rgb values separated by commas
            // return $rgb; // returns an array with the rgb values
        }
    }
}