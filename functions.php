<?php

//SCRIPTS
//registering external scripts
wp_register_script( 'twitter-timeline-api', 'https://platform.twitter.com/widgets.js' , '', '', true );
wp_register_script( 'google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA_G3MwlAbA0ROQaVm3Rwf9PiH3CcYgm6E&callback=initMap' , '', '', true );

//enqueuing theme scripts
function deco_scripts(){
    wp_enqueue_style('deco_style', get_template_directory_uri().'/assets/css/style.min.css');
    wp_enqueue_script('deco_script', get_template_directory_uri().'/scripts.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'twitter-timeline-api' );
    wp_enqueue_script('google-maps-api');
}

add_action( 'wp_enqueue_scripts', 'deco_scripts' );

//NAVIGATION MENUS
//registering navigation menus
function deco_menus(){
    register_nav_menus(
        array(
            'header-navigation' => __('Header page navigation'),
            'header-social-media' => __('Header social-media icons'),
            'sidebar-social-media' => __('Sidebar social-media icons'),
            'post-social-media' => __('Post social-media icons'),
            'recent-posts' => __('Banner recent posts')
        )
    );
}

add_action( 'init', 'deco_menus' );

//including modified Recent posts navigation for banner slider
include_once( get_stylesheet_directory() . '/assets/lib/recent-posts-nav.php' );

function deco_recent_posts_nav( $args ) {
    if ( $args['theme_location'] == 'recent-posts' ) {
        $args['walker']         = new deco_recent_posts_nav;
        $args['desc_depth']     = 0;
        $args['thumbnail']      = true;
        $args['thumbnail_size'] = 'full';
    }

    return $args;
}

add_filter( 'wp_nav_menu_args', 'deco_recent_posts_nav' );

//POSTS & COMMENTS
//adding post formats
add_theme_support( 'post-formats', array('gallery', 'link', 'image', 'quote', 'status', 'video', 'audio') );

//adding post thumbnails aka featured images
add_theme_support( 'post-thumbnails' );

//modifying default '(more...)' link
function deco_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Read more</a>';
}

add_filter( 'the_content_more_link', 'deco_more_link' );

//moving comments fields to the bottom
function wpb_move_comment_field_to_bottom($fields){
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );


//WIDGETS
//Header logo widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Header logo'
        )
    );

//Sidebar search widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Sidebar search',
        )
    );

//Sidebar image widget - large
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Sidebar image - large',
        )
    );

//Sidebar categories widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Sidebar categories',
        )
    );

//Sidebar image widget - small
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Sidebar image - small',
        )
    );

//Sidebar latest post widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Sidebar latest posts',
        )
    );

//Sidebar slider widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Sidebar slider',
        )
    );

//Footer about blog widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Footer about blog',
        )
    );

//Footer twitter widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Footer twitter',
        )
    );

//Footer instagram widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Footer instagram',
        )
    );

//Footer recent comments widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Footer comments',
        )
    );

//Sidebar categories widget - removing parentheses from post counter
function categories_postcount_filter ($variable) {
    $variable = str_replace('(', '<span class="post_count"> ', $variable);
    $variable = str_replace(')', ' </span>', $variable);
    return $variable;
}

add_filter('wp_list_categories','categories_postcount_filter');

//including modified Recent posts widget
include_once( get_stylesheet_directory() . '/assets/lib/recent-posts-widget.php' );

function deco_recent_post_widget_registration(){
    unregister_widget('WP_Widget_Recent_Posts');
    register_widget('deco_recent_post_widget');
}

add_action('widgets_init', 'deco_recent_post_widget_registration');

//including modified Recent comments widget
include_once( get_stylesheet_directory() . '/assets/lib/recent-comments-widget.php' );

function deco_recent_comments_widget_registration() {
    unregister_widget('WP_Widget_Recent_Comments');
    register_widget('deco_recent_comments');
}

add_action('widgets_init', 'deco_recent_comments_widget_registration');