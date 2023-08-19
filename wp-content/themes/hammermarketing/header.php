<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <?php
    esc_url(get_template_part('inc/metadata'));
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

<header>
    <div class="header container full-width">

        <div class="logo">
            <a href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo('name'); ?>">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/images/logo.svg'); ?>" />
            </a>
        </div>

        <div class="nav-wrap">
            <?php
            echo '<nav aria-label="Primary Navigation">';
            if (has_nav_menu('primary')) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'main-nav nav',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    )
                );
            }
            echo '</nav>';
        ?>
        </div>

    </div><!-- container -->
</header><!-- header -->

<main class="content-overflow">