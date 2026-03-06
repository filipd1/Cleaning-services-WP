<?php

add_action( 'after_setup_theme', function () {

    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    register_nav_menus([
        'main_menu' => 'Main menu',
        'footer_menu' => 'Footer menu',
    ]);

    add_theme_support('post-thumbnails');
});

function theme_customizer_footer_logo($wp_customize) {

    $wp_customize->add_setting('footer_logo');

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer_logo',
            [
                'label' => 'Footer Logo',
                'section' => 'title_tagline',
                'settings' => 'footer_logo',
            ]
        )
    );

}

add_action('customize_register', 'theme_customizer_footer_logo');

add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        filemtime(get_template_directory() . '/assets/css/main.css')
    );
});

function load_scripts() {

    wp_enqueue_script(
        'priceSwitchBtn',
        get_stylesheet_directory_uri() . '/assets/js/priceSwitchBtn.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'testimonies-swiper',
        get_stylesheet_directory_uri() . '/assets/js/swiper.js',
        ['swiper-js'],
        '1.0',
        true
    );

    wp_enqueue_script(
        'mobile-menu',
        get_stylesheet_directory_uri() . '/assets/js/mobile-menu.js',
        [],
        null,
        true
    );
};
add_action( 'wp_enqueue_scripts', 'load_scripts');

function enqueue_swiper() {
    
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css',
        [],
        null
    );

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js',
        [],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_swiper');

add_action('init', function () {
    
    register_post_type('services', [
        'labels' => [
            'name' => 'Services',
            'singular_name' => 'Service',
        ],
        'rewrite' => [
            'slug' => 'services',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'thumbnail', 'excerpt'],
    ]);

    register_post_type('staff', [
        'labels' => [
            'name' => 'Staff',
            'singular_name' => 'Staff',
        ],
        'rewrite' => [
            'slug' => 'staff',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'thumbnail', 'excerpt'],
    ]);

    register_post_type('plans', [
        'labels' => [
            'name' => 'Plans',
            'singular_name' => 'Plan',
        ],
        'rewrite' => [
            'slug' => 'plans',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title'],
    ]);

    register_post_type('testimonies', [
        'labels' => [
            'name' => 'Testimonies',
            'singular_name' => 'Testimony',
        ],
        'rewrite' => [
            'slug' => 'testimonies',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'thumbnail'],
    ]);

});


function klfc_register_acf_blocks() {
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'            => 'section-landing-page',
            'title'           => __('Front page - Hero section'),
            'description'     => __('First section on front page'),
            'render_template' => 'template-parts/sections/section-hero.php',
            'category'        => 'layout',
            'icon'            => 'layout',
            'supports'        => array(
                'align' => false
            )
        ));

        acf_register_block_type(array(
            'name'            => 'section-services-1',
            'title'           => __('Front page - Services first block'),
            'description'     => __('Services block 1'),
            'render_template' => 'template-parts/sections/section-services-first.php',
            'category'        => 'layout',
            'icon'            => 'layout',
            'supports'        => array(
                'align' => false
            )
        ));

        acf_register_block_type(array(
            'name'            => 'section-services-2',
            'title'           => __('Front page - Services second block'),
            'description'     => __('Services block 2'),
            'render_template' => 'template-parts/sections/section-services-second.php',
            'category'        => 'layout',
            'icon'            => 'layout',
            'supports'        => array(
                'align' => false
            )
        ));

        acf_register_block_type(array(
            'name'            => 'section-staff',
            'title'           => __('Front page - Staff block'),
            'description'     => __('Staff block'),
            'render_template' => 'template-parts/sections/section-staff.php',
            'category'        => 'layout',
            'icon'            => 'layout',
            'supports'        => array(
                'align' => false
            )
        ));

        acf_register_block_type(array(
            'name'            => 'section-company',
            'title'           => __('Front page - Company block'),
            'description'     => __('Company block'),
            'render_template' => 'template-parts/sections/section-company.php',
            'category'        => 'layout',
            'icon'            => 'layout',
            'supports'        => array(
                'align' => false
            )
        ));

        acf_register_block_type(array(
            'name'            => 'section-plans',
            'title'           => __('Front page - Plans block'),
            'description'     => __('Plans block'),
            'render_template' => 'template-parts/sections/section-plans.php',
            'category'        => 'layout',
            'icon'            => 'layout',
            'supports'        => array(
                'align' => false
            )
        ));

        acf_register_block_type(array(
            'name'            => 'section-testimonies',
            'title'           => __('Front page - Testimonies block'),
            'description'     => __('Testimonies block'),
            'render_template' => 'template-parts/sections/section-testimonies.php',
            'category'        => 'layout',
            'icon'            => 'layout',
            'supports'        => array(
                'align' => false
            )
        ));

        acf_register_block_type(array(
            'name'            => 'section-blog',
            'title'           => __('Front page - Blog block'),
            'description'     => __('Blog block'),
            'render_template' => 'template-parts/sections/section-blog.php',
            'category'        => 'layout',
            'icon'            => 'layout',
            'supports'        => array(
                'align' => false
            )
        ));

        acf_register_block_type(array(
            'name'            => 'section-contact',
            'title'           => __('Front page - Contact block'),
            'description'     => __('Contact block'),
            'render_template' => 'template-parts/sections/section-contact.php',
            'category'        => 'layout',
            'icon'            => 'layout',
            'supports'        => array(
                'align' => false
            )
        ));

    }
}
add_action('acf/init', 'klfc_register_acf_blocks');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title' => 'Ustawienia globalne',
        'menu_title' => 'Global Settings',
        'menu_slug'  => 'global-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ]);
}