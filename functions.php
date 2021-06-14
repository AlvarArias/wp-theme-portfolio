<?php

function my_portfolio() {

    wp_enqueue_style('portfolio_styles2', get_theme_file_uri('css/style.css'));

    wp_enqueue_style('portfolio_product_styles', get_theme_file_uri('css/product.css'));
  
    // Boostrampo icons 
    wp_enqueue_style('icons_font_awesone', '//use.fontawesome.com/releases/v5.7.0/css/all.css');


    wp_enqueue_style('Comfortaa', '//fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap');

    wp_enqueue_style('Nixie_One','//fonts.googleapis.com/css2?family=Nixie+One&display=swap'); 
    
    wp_enqueue_style('w3schools','//www.w3schools.com/w3css/4/w3.css');
 
    wp_enqueue_script('my_menu2', get_theme_file_uri('js/my-code.js'));
    
}

add_action('wp_enqueue_scripts','my_portfolio');


function portfolio_features() {
    register_nav_menu( 'left_menu_header', 'Lef Menu Header');
    add_theme_support('title-tag');
}

add_action('after_setup_theme','portfolio_features');





       