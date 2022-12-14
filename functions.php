<?php

require('inc/register-menus.php');

require('inc/helper-functions.php');

require('inc/customizer.php');

function cswa_template_script_enqueue()
{
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/master.css', false, NULL, 'all' );
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false, NULL, 'all' );
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', false, NULL, 'all' );
}

add_action('wp_enqueue_scripts', 'cswa_template_script_enqueue');

function remove_admin_bar() {
    show_admin_bar(false);
}

add_action('after_setup_theme', 'remove_admin_bar');

function cswa_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<p class="h-uppercase">',
        'after_title'   => '</p>',
    ) );

}
add_action( 'widgets_init', 'cswa_widgets_init' );