<?php


//register footer widgets


//widgets register

function widgets_reg(){
    register_sidebar(array(
        'name'=>__('Top Products','UtpaulSarker'),
        'id'=>'top_products',
        'description'=>__('this is the footer'),
        'before_widget'=>'<div class="footer">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="title">',
        'after_title'=>'</h2>',

    ));

    register_sidebar(array(
        'name'=>__('Quick Links','UtpaulSarker'),
        'id'=>'quick_links',
        'description'=>__('this is the footer'),
        'before_widget'=>'<div class="footer">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="title">',
        'after_title'=>'</h2>',

    ));

    register_sidebar(array(
        'name'=>__('Features','UtpaulSarker'),
        'id'=>'features',
        'description'=>__('this is the footer'),
        'before_widget'=>'<div class="footer">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="title">',
        'after_title'=>'</h2>',

    ));

    register_sidebar(array(
        'name'=>__('Resources','UtpaulSarker'),
        'id'=>'resources',
        'description'=>__('this is the footer'),
        'before_widget'=>'<div class="footer">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="title">',
        'after_title'=>'</h2>',

    ));

    register_sidebar(array(
        'name'=>__('Instragram Feed','UtpaulSarker'),
        'id'=>'instragram_feed',
        'description'=>__('this is the footer'),
        'before_widget'=>'<div class="footer">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="title">',
        'after_title'=>'</h2>',

    ));
}

add_action('widgets_init','widgets_reg');