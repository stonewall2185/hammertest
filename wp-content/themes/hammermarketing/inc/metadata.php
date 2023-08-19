<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="profile" href="https://gmpg.org/xfn/11" />

<?php
/* - - - - - - - - - - - - - - - - - - - - - - - - - -
/* COLOR SETTINGS
*/
$color_primary = hammer()->get_admin_option('hammer_setting_colors_primary');
$color_secondary = hammer()->get_admin_option('hammer_setting_colors_secondary');
$color_black = hammer()->get_admin_option('hammer_setting_colors_black');
$color_white = hammer()->get_admin_option('hammer_setting_colors_white');
$color_gray = hammer()->get_admin_option('hammer_setting_colors_gray');
$color_gray_dark = hammer()->get_admin_option('hammer_setting_colors_gray_dark');
?>
<style>
    :root { 
        --color_primary: <?php echo esc_attr($color_primary); ?>;
        --color_secondary: <?php echo esc_attr($color_secondary); ?>;
        --color_black: <?php echo esc_attr($color_black); ?>;
        --color_white: <?php echo esc_attr($color_white); ?>;
        --color_gray: <?php echo esc_attr($color_gray); ?>;
        --color_gray_dark: <?php echo esc_attr($color_gray_dark); ?>;
        /* RGB - needed to run rgba in the css */
        --color_primary_rgb: <?php echo esc_attr(hammer()->hex2rgb($color_primary)); ?>;
        --color_secondary_rgb: <?php echo esc_attr(hammer()->hex2rgb($color_secondary)); ?>;
        --color_gray_rgb: <?php echo esc_attr(hammer()->hex2rgb($color_gray)); ?>;
    }
</style>
<?php
do_action('hammer_metadata_end');