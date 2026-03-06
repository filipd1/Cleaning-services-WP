<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="site-header">
    
    <?php if (has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>
    <?php endif; ?>

    <?php
        wp_nav_menu([
            'theme_location' => 'main_menu',
            'container' => 'false',
            'menu_class' => 'main-menu'
        ])
    ?>

    <a href="#" class="btn btn-main">Our services</a>

    <button class="mobile-menu-toggle" aria-label="Open menu">
        ☰
    </button>

    <?php
        wp_nav_menu([
            'theme_location' => 'main_menu',
            'container'      => 'false',
            'menu_class' => 'mobile-menu'
        ]);
    ?>

</div>
