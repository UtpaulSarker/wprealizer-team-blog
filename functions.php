<?php
//All enqueue Function here
function u_css_js_file_calling()
{

    //css calling
    wp_register_style('linearicons', get_template_directory_uri() . '/css/linearicons.css', array(), '1.0.0', 'all');


    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0', 'all');

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all');

    wp_register_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), '1.0.0', 'all');

    wp_register_style('nice-select', get_template_directory_uri() . '/css/nice-select.css', array(), '1.0.0', 'all');

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.min.css', array(), '1.0.0', 'all');

    wp_register_style('owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.0.0', 'all');

    wp_register_style('jquery-ui', get_template_directory_uri() . '/css/jquery-ui.css', array(), '1.0.0', 'all');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
    
    wp_enqueue_style('linearicons');
    wp_enqueue_style('font-awesome');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('magnific-popup');
    wp_enqueue_style('nice-select');
    wp_enqueue_style('animate');
    wp_enqueue_style('owl.carousel');
    wp_enqueue_style('jquery-ui');
    wp_enqueue_style('main');

    wp_enqueue_style('u_style', get_stylesheet_uri());

    //jQuery

    //wp_enqueue_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-2.2.4.min.js');

    wp_enqueue_script('cdn','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');

    wp_enqueue_script('map','https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA');

    
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js');

    

    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');

    wp_enqueue_script('easing', get_template_directory_uri() . '/js/easing.min.js');
    
    wp_enqueue_script('hoverIntent', get_template_directory_uri() . '/js/hoverIntent.js');
    
    wp_enqueue_script('ajaxchimp', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js');
    
    wp_enqueue_script('magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js');
    
    wp_enqueue_script('select', get_template_directory_uri() . '/js/jquery.nice-select.min.js');
    
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js');
    
    wp_enqueue_script('mail', get_template_directory_uri() . '/js/mail-script.js');
    
    wp_enqueue_script('accordion', get_template_directory_uri() . '/js/mn-accordion.js');
    
    wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js');
    
    wp_enqueue_script('superfish', get_template_directory_uri() . '/js/superfish.min.js');
    

}
add_action('wp_enqueue_scripts', 'u_css_js_file_calling');

//Google Font Enqueue
function u_add_google_fonts()
{

    wp_enqueue_style('u_google_font', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald:wght@200..700&display=swap" rel="stylesheet', false);
}
add_action('wp_enqueue_scripts', 'u_add_google_fonts');

register_nav_menu('main_menu', __('Main Menu', 'UtpaulSarker'));


//widgets register

function widgets_reg(){
    register_sidebar(array(
        'name'=>__('Main widgets area','UtpaulSarker'),
        'id'=>'footer-1',
        'description'=>__('this is the footer'),
        'before_widget'=>'<div class="footer">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="title">',
        'after_title'=>'</h2>',

    ));
}

add_action('widgets_init','widgets_reg');