<?php
if(!defined('ABSPATH')){ exit; } //Exit if accessed directly

if(!class_exists('Hammer')){
	require_once get_template_directory() . '/inc/Assets.php';
	require_once get_template_directory() . '/inc/Admin/Admin.php';
    require_once get_template_directory() . '/inc/Admin/Functions.php';
	require_once get_template_directory() . '/inc/Gutenberg/Gutenberg.php';

	/* - - - - - - - - - - - - - - - - - - - - - - - - - -
	/* CLASSES
	*/
	$class_path = get_template_directory() . "/inc/PostTypes";
	foreach (glob($class_path . "/*.php") as $filename) {
		if( substr(basename($filename),0,1) === "_" ) continue;
		include $filename;
		preg_match('/(\w+)\.php/',$filename,$class_name);
		if($class_name = $class_name[1])$$class_name = new $class_name;
	}

	class Hammer {
		use Assets { Assets::hooks as AssetsHooks; }
		use Admin { Admin::hooks as AdminHooks; }
		use Functions { Functions::hooks as FunctionsHooks; }
		use Gutenberg { Gutenberg::hooks as GutenbergHooks; }

		private static $instance;

		//Get active instance
		public static function instance(){
			if(!self::$instance){
				self::$instance = new Hammer();
				self::$instance->hooks();
			}

			return self::$instance;
		}

		//Run action and filter hooks
		private function hooks(){
			$this->AssetsHooks();
			$this->FunctionsHooks();
			$this->GutenbergHooks();

			if(is_admin() || is_admin_bar_showing()){
				$this->AdminHooks();
			}
		}
	}
}

function hammer(){
	return Hammer::instance();
}
add_action('init', 'hammer', 1);