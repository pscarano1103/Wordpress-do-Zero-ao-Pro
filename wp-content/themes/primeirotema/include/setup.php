<?php

function pp_theme_styles()
{
    wp_enqueue_style('theme_css', get_template_directory_uri() . '/assets/css/theme.css');
    wp_enqueue_script('theme_js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '', true);
}

function pp_after_setup()
{
    add_theme_support('menus');

    add_theme_support('post-thumbnails');

    register_nav_menu('primary', __('Primary Menu', 'primeirotema'));
}


function pp_widgets()
{
    register_sidebar(array(
        'name' => __('Meu primeiro Sidebar', 'primeirotema'),
        'id' => 'pp_sidebar',
        'description' => __('Sidebar para o tema', 'primeirotema'),
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>',
        'befor_widget' => '<div id="%1$s" class="widget %2$s"',
        'after_widget' => '</div>'
    ));
}
