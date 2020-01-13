<?php

function registerStyles()
{
    //Include google fonts
    wp_enqueue_style('SourceSansPro-Regular', 'https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap');

    //include bootstrap css
    wp_enqueue_style('open-iconic-bootstrap.min', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css');

    //include boostrap css
    wp_enqueue_style('owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('css/magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');

    //include aos.css
    wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css');

    //include aniamte.css
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');


    //include ionicons css
    wp_enqueue_style('ionicons.min', get_template_directory_uri() . '/css/ionicons.min.css');

    //include boostrap css
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css');
    wp_enqueue_style('icomoon', get_template_directory_uri() . '/css/icomoon.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'registerStyles');


// Disabled for now
// function my_cptui_featured_image_support()
// {
//     $cptui_post_types = cptui_get_post_type_slugs();
//     add_theme_support('post-thumbnails', $cptui_post_types);
// }
// add_action('after_setup_theme', 'my_cptui_featured_image_support');




function registerScripts()
{
    //register Scripts
    wp_enqueue_script('jquery-3.4.1', get_template_directory_uri() . '/js/jquery-3.4.1.js', false, false, true);

    wp_enqueue_script('jquery-migrate-3.0.1.min', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', false, false, true);

    wp_enqueue_script('popper.min', get_template_directory_uri() . '/js/popper.min.js', false, false, true);

    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap/bootstrap.js', false, false, true);

    wp_enqueue_script('jquery.easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', false, false, true);

    wp_enqueue_script('jquery.waypoints.min', get_template_directory_uri() . '/js/jquery.waypoints.min.js', false, false, true);

    wp_enqueue_script('jquery.stellar.min', get_template_directory_uri() . '/js/jquery.stellar.min.js', false, false, true);

    wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', false, false, true);

    wp_enqueue_script('jquery.magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', false, false, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js', false, false, true);

    wp_enqueue_script('jquery.animateNumber.min', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', false, false, true);

    wp_enqueue_script('"scrollax.min', get_template_directory_uri() . '"/js/scrollax.min.js', false, false, true);

    wp_enqueue_script('GoogleMap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', false, false, true);

    wp_enqueue_script('google-map', get_template_directory_uri() . '/js/google-map.js', false, false, true);

    //Desabled for Now
    // wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', false, false, true);
}

add_action('wp_enqueue_scripts', 'registerScripts');




function register_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_menu');



// Disabled for now
/**
 * Register Custom Navigation Walker
 */
// function register_navwalker()
// {
//     require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// }
// add_action('after_setup_theme', 'register_navwalker');
