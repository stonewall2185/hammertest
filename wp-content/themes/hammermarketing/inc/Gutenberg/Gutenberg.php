<?php
if ( !defined('ABSPATH') ){ die(); } //Exit if accessed directly

if ( !trait_exists('Gutenberg') ){
    trait Gutenberg {
        public function hooks(){
            if ( function_exists('register_block_type') ){
                add_action('after_setup_theme', array($this,'ham_gutenberg_use_theme_colors'));
            }
        }

        /* - - - - - - - - - - - - - - - - - - - - - - - - - -
        /* THEME COLORS OVERRIDE
        */
        function ham_gutenberg_use_theme_colors() {
            add_theme_support( 'disable-custom-colors' );
            add_theme_support( 'editor-gradient-presets', array() );
            add_theme_support( 'disable-custom-gradients' );
            // add_theme_support('align-wide');
            
            $color_primary = hammer()->get_admin_option('hammer_setting_colors_primary');
            $color_secondary = hammer()->get_admin_option('hammer_setting_colors_secondary');
            $color_black = hammer()->get_admin_option('hammer_setting_colors_black');
            $color_white = hammer()->get_admin_option('hammer_setting_colors_white');
            $color_gray = hammer()->get_admin_option('hammer_setting_colors_gray');

            add_theme_support(
                'editor-color-palette', array(
                    array(
                        'name'  => esc_html__( 'Primary', 'weidenhammer' ),
                        'slug' => 'primary',
                        'color' => $color_primary,
                    ),
                    array(
                        'name'  => esc_html__( 'Secondary', 'weidenhammer' ),
                        'slug' => 'secondary',
                        'color' => $color_secondary,
                    ),
                    array(
                        'name'  => esc_html__( 'White', 'weidenhammer' ),
                        'slug' => 'white',
                        'color' => $color_white,
                    ),
                    array(
                        'name'  => esc_html__( 'Black', 'weidenhammer' ),
                        'slug' => 'black',
                        'color' => $color_black,
                    ),
                    array(
                        'name'  => esc_html__( 'Gray', 'weidenhammer' ),
                        'slug' => 'gray',
                        'color' => $color_gray,
                    ),
                )
            );

            add_theme_support( 'editor-font-sizes', array(
                array(
                    'name' => __( 'Small', 'weidenhammer' ),
                    'size' => 12,
                    'slug' => 'small'
                ),
                array(
                    'name' => __( 'Regular', 'weidenhammer' ),
                    'size' => 16,
                    'slug' => 'regular'
                ),
                array(
                    'name' => __( 'Large', 'weidenhammer' ),
                    'size' => 24,
                    'slug' => 'large'
                ),
            ) );
        }
    } // gutenberg
} // if trait