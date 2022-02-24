<?php

if ( ! function_exists( 'twentyfifteen_setup' ) ) :

function twentyfifteen_setup() {

	load_theme_textdomain( 'twentyfifteen', get_template_directory() . '/languages' );

	add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );

	add_theme_support('post-thumbnails');

	add_theme_support( 'post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat') );

}

endif;

add_action( 'after_setup_theme', 'twentyfifteen_setup' );



function twentyfifteen_widgets_init() {

	register_sidebar( array(

		'name'          => __( 'Widget Area', 'twentyfifteen' ),

		'id'            => 'sidebar-1',

		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h2 class="widget-title">',

		'after_title'   => '</h2>',

	) );

}

add_action( 'widgets_init', 'twentyfifteen_widgets_init' );



// Menu Custom ACF

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page('Informações de contato');

}



function starter_scripts() {

    wp_deregister_script( 'jquery' );

    wp_register_script( 'jquery', '', false, NULL, true );

    wp_enqueue_script( 'jquery' );

}

add_action( 'wp_enqueue_scripts', 'starter_scripts' );



function currentYear(){

	return date('Y');

}