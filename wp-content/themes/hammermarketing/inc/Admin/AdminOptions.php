<?php
if ( !defined('ABSPATH') ){ die(); } //Exit if accessed directly

if ( !trait_exists('AdminOptions') ){
	trait AdminOptions {
		public function hooks(){
			add_action( 'cmb2_admin_init', array($this,'hammer_register_admin_options_metabox') );
        }

	    public function hammer_register_admin_options_metabox() {
			$cmb_admin = new_cmb2_box( array(
				'id'           => 'hammer_admin_metabox',
				'title'        => 'Admin Options',
				'object_types' => array( 'options-page' ),

				'option_key'      => 'hammer_admin_options',
				'icon_url'        => 'data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDAgNDAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQwIDQwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHBhdGggZmlsbD0iI2ZmZmZmZiIgZD0iTTM3LDE4LjFjMCwwLjQtMC40LDAuNy0wLjcsMC43Yy0wLjIsMC0wLjQtMC4xLTAuNS0wLjRjLTAuNy0xLTEuMi0yLjctMy40LTUuOGMtMC42LTEtMS40LTEuOC0yLjEtMi42bDAsMEMyNy40LDcsMjMuNSw1LjEsMTksNC44Yy0wLjQsMC0wLjcsMC0xLDBjLTAuMiwwLTAuNCwwLTAuNiwwYy0xLjUsMC4xLTIuNywwLjMtMy43LDAuNWMtMC41LDAuMi0xLjEsMC4zLTEuNSwwLjRsMCwwYy0wLjEsMC0wLjIsMC4xLTAuMywwLjFjMS4xLTAuNiwyLjQtMS4xLDMuNy0xLjRDMjQuOSwyLDM0LjQsNy42LDM2LjksMTYuOGMwLjEsMC40LDAuMiwwLjcsMC4zLDFDMzcsMTgsMzcsMTguMSwzNywxOC4xeiBNMzQuOCwzMC40Yy0wLjcsMC41LTEuNiwwLjktMi42LDAuOGMtMC4yLDAtMC40LDAtMC41LTAuMWMtMC4xLDAtMC4yLDAtMC40LTAuMWMtMi4yLTAuNC00LjMtMi4zLTYuMy01LjhjLTEuOC0zLjEtMy43LTYuNi01LjYtOWMtMS4yLTEuNC0yLjctMi43LTQuNy0zLjRjLTAuOS0wLjMtMS44LTAuNC0yLjctMC40Yy00LjcsMC4yLTguNSwzLjYtOS4xLDguMWMwLjYtMC44LDEuNi0xLjIsMi43LTEuMmMwLjQsMCwwLjksMC4xLDEuMiwwLjNjMC4zLDAuMSwwLjQsMC4zLDAuNywwLjRjMS4xLDAuOCwxLjgsMiwyLjUsMy4yYzEuMSwxLjksMy4yLDYuOSw2LjEsOS43YzAuMSwwLjEsMC4zLDAuMywwLjQsMC40YzIsMS45LDQuNywzLjIsNy42LDMuMkMyOC42LDM2LjcsMzIuNywzNC4yLDM0LjgsMzAuNEwzNC44LDMwLjRDMzQuNywzMC41LDM0LjcsMzAuNSwzNC44LDMwLjR6IE0zNywyMC44TDM3LDIwLjhjLTAuMSwwLjEtMC4yLDAuMS0wLjIsMC4ybDAsMGMwLDAtMC4xLDAtMC4xLDAuMWwwLDBjLTAuMSwwLjEtMC4yLDAuMS0wLjMsMC4xbDAsMGgtMC4xbDAsMGMtMC4xLDAtMC4xLDAtMC4yLDAuMWwwLDBoLTAuMWwwLDBIMzZsMCwwYy0wLjEsMC0wLjEsMC0wLjIsMGMtMC4yLDAtMC40LDAtMC41LTAuMWwwLDBsMCwwYy0wLjctMC4zLTEuMS0xLTEuOC0xLjljLTEuNy0yLjUtMy41LTYuNC02LjUtOS4xYy00LjQtNC0xMC40LTQuNy0xNC45LTMuMmMtMC43LDAuMy0xLjIsMC41LTEuOCwwLjhDOCw5LDYuMSwxMC44LDQuNywxMy4xdjAuMWwwLDBjLTAuMSwwLjEtMC4xLDAuMi0wLjIsMC4zYzIuMS0yLjIsNS4yLTMuNiw4LjUtMy41YzEuNywwLjEsMy4yLDAuNCw0LjcsMS4xYzAuOCwwLjQsMS42LDAuOSwyLjMsMS41YzIuMiwxLjgsNC4xLDQuOCw2LDguMWMxLjYsMi43LDIuNiw0LjUsMy41LDUuNmMxLjQsMS45LDIuOSwyLjcsNC4zLDIuNmMwLjIsMCwwLjQsMCwwLjUtMC4xbDAsMGwwLDBjMC44LTAuMiwxLjUtMC43LDEuOC0xLjNjMC4yLTAuNCwwLjQtMC45LDAuNi0xLjVjMC41LTEuOCwwLjgtMy44LDAuNy01LjhDMzcuMiwyMC42LDM3LjEsMjAuNywzNywyMC44eiIvPjwvc3ZnPg==',
				'position'        => 0,
			) );
			

			// name the ID 
			// if it should be its own page thats includes (class, etc), start it with hammer_module_
			// if it should just be a setting thats going to control a filter, start it with hammer_setting_

			// COLOR SCHEME
			$cmb_admin->add_field( array(
				'name' => 'Colors Galore',
				'desc' => "These change your colors throughout the site as well as Gutenberg blocks",
				'id'   => 'admin_setting_colors_title',
				'type' => 'title',
			) );

			$cmb_admin->add_field( array(
				'name'    	=> 'Primary',
				'id'      	=> 'hammer_setting_colors_primary',
				'type'    	=> 'colorpicker',
				'default'   => '#1E4079',
			) );

			$cmb_admin->add_field( array(
				'name'    	=> 'Secondary',
				'id'      	=> 'hammer_setting_colors_secondary',
				'type'    	=> 'colorpicker',
				'default'   => '#81BC09',
			) );

			$cmb_admin->add_field( array(
				'name'    	=> 'Black',
				'id'      	=> 'hammer_setting_colors_black',
				'type'    	=> 'colorpicker',
				'default'   => '#000000',
			) );

			$cmb_admin->add_field( array(
				'name'    	=> 'White',
				'id'      	=> 'hammer_setting_colors_white',
				'type'    	=> 'colorpicker',
				'default'   => '#ffffff',
			) );

			$cmb_admin->add_field( array(
				'name'    	=> 'Gray Light',
				'id'      	=> 'hammer_setting_colors_gray',
				'type'    	=> 'colorpicker',
				'default'   => '#eeeeee',
			) );

			$cmb_admin->add_field( array(
				'name'    	=> 'Gray Dark',
				'id'      	=> 'hammer_setting_colors_gray_dark',
				'type'    	=> 'colorpicker',
				'default'   => '#aaaaaa',
			) );

			// Fonts (lets add Typekit and w/e else there is)
			$cmb_admin->add_field( array(
				'name' => 'Font Embeds',
				'desc' => "Adds font scripts into the theme",
				'id'   => 'admin_setting_fonts_google_title',
				'type' => 'title',
			) );

			$cmb_admin->add_field( array(
				'name'    	=> 'Google Fonts',
				'id'      	=> 'hammer_setting_fonts_google',
				'desc'		=> 'If using multiple fonts, run the url through an <a href="https://www.urlencoder.org/" target="_blank">ENCODER</a>',
				'type'    	=> 'text_url',
			) );
		}
		
		public function get_admin_option( $key = '', $default = false ) {
			if ( function_exists( 'cmb2_get_option' ) ) {
				// Use cmb2_get_option as it passes through some key filters.
				return cmb2_get_option( 'hammer_admin_options', $key, $default );
			}

			// Fallback to get_option if CMB2 is not loaded yet.
			$opts = get_option( 'hammer_admin_options', $default );

			$val = $default;

			if ( 'all' === $key ) {
				$val = $opts;
			} elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
				$val = $opts[ $key ];
			}

			return $val;
		}
	}
}