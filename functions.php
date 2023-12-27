<?php 

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/styles/header.css' );
    wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/styles/home.css' );
    wp_enqueue_style( 'About', get_template_directory_uri() . '/assets/styles/about.css' );
    wp_enqueue_style( 'Vacancies', get_template_directory_uri() . '/assets/styles/vacancies.css' );
    wp_enqueue_style( 'Partner', get_template_directory_uri() . '/assets/styles/partner.css' );
    wp_enqueue_style( 'Works', get_template_directory_uri() . '/assets/styles/works.css' );
    wp_enqueue_style( 'Services', get_template_directory_uri() . '/assets/styles/services.css' );
    wp_enqueue_style( 'Service', get_template_directory_uri() . '/assets/styles/service.css' );
    
    wp_enqueue_style( 'Contacts', get_template_directory_uri() . '/assets/styles/contacts.css' );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/styles/footer.css' );
    
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/scripts/script.js', array(), 'null', true );
    wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/scripts/slider.js', array(), 'null', true );
    wp_enqueue_script( 'vacancies', get_template_directory_uri() . '/assets/scripts/vacancies.js', array(), 'null', true );
    wp_enqueue_script( 'partner', get_template_directory_uri() . '/assets/scripts/partner.js', array(), 'null', true );
    wp_enqueue_script( 'works', get_template_directory_uri() . '/assets/scripts/works.js', array(), 'null', true );
    wp_enqueue_script( 'services', get_template_directory_uri() . '/assets/scripts/service.js', array(), 'null', true );
    wp_enqueue_script( 'seller', get_template_directory_uri() . '/assets/scripts/seller.js', array(), 'null', true );
    wp_enqueue_script( 'list', get_template_directory_uri() . '/assets/scripts/list-popup.js', array(), 'null', true );
    
}
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>  
