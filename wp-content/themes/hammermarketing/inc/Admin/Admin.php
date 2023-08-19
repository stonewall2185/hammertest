<?php
if ( !defined('ABSPATH') ){ die(); } //Exit if accessed directly

if ( !trait_exists('Admin') ){
    require_once get_template_directory() . '/inc/Admin/AdminOptions.php';

    trait Admin {
        use AdminOptions { AdminOptions::hooks as AdminOptionHooks; }

        public function hooks(){
            $this->AdminOptionHooks();

            add_action('after_switch_theme', array($this, 'hammer_theme_activated'));
        }

        /* - - - - - - - - - - - - - - - - - - - - - - - - - -
        /* HAMMER THEME ACTIVATION
        */
       
        public function hammer_theme_activated($old_theme_name, $old_theme = false) {
            // only if this has been activated once
            if(!get_option('hammer_installed')) {
                add_option('hammer_installed', true);
                
                // deactivate default sidebar widgets
                update_option('sidebars_widgets', array());
                
                // change timezone
                update_option('timezone_string', 'America/New_York');
                
                // start of the week to sunday
                update_option('start_of_week', 0);
                
                // set the permalink structure to be "pretty" style
                update_option('permalink_structure', '/%postname%/');
                global $wp_rewrite;
                $wp_rewrite->flush_rules();
                
                // lets make a homepage and set it to be the frontpage
                $current_front_page = get_option('page_on_front');
                $sample_page = get_page_by_title('Sample Page');
                if ( empty($current_front_page) || $current_front_page === $sample_page ){
                    $new_homepage_id = ( !empty($sample_page) )? $sample_page : 0;
                    wp_insert_post(array(
                        'ID' => $new_homepage_id,
                        'post_type' => 'page',
                        'post_title' => 'Home',
                        'post_name' => 'home',
                        'post_status' => 'publish',
                        'post_author' => get_current_user_id(),
                    ));

                    update_option('page_on_front', get_page_by_title('Home'));
                    update_option('show_on_front', 'page');
                }
            }
        }

    } // Admin trait
} // if admin
