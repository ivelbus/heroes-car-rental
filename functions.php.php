<?php
// Activa soporte para menús y miniaturas
function heroes_car_rental_setup() {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'heroes_car_rental_setup');

// Registra menús
function heroes_car_rental_register_menus() {
    register_nav_menus([
        'main-menu' => __('Menú Principal', 'heroes-car-rental')
    ]);
}
add_action('init', 'heroes_car_rental_register_menus');

// Carga estilos y scripts
function heroes_car_rental_enqueue_scripts() {
    wp_enqueue_style('heroes-car-rental-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'heroes_car_rental_enqueue_scripts');