<?php
/*
Google CDN jQuery with a local fallback
=======================================
See http://www.wpcoke.com/load-jquery-from-cdn-with-local-fallback-for-wordpress/
*/

if( !is_admin()){
	$url = 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'; 
	$test_url = @fopen($url,'r'); 
	if($test_url !== false) { 
		function load_external_jQuery() {
			wp_deregister_script('jquery'); 
			wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'); 
			wp_enqueue_script('jquery'); 
		}
		add_action('wp_enqueue_scripts', 'load_external_jQuery'); 
	} else {
		function load_local_jQuery() {
			wp_deregister_script('jquery'); 
			wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.3.min.js', __FILE__, false, '1.11.3', true); 
			wp_enqueue_script('jquery'); 
		}
		add_action('wp_enqueue_scripts', 'load_local_jQuery'); 
	}
}

function es_mad_enqueues() {

/*
OPTIONAL: Enqueue WordPress's onboard jQuery
============================================
Un-comment the next two lines of code if you want to use WordPress's onboard jQuery INSTEAD of the Google CDN jQuery above.
	wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.3.min.js', __FILE__, false, '1.11.3', true);
	wp_enqueue_script( 'jquery' );
*/
    
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, '3.3.4', null);
	wp_register_style('theme', get_template_directory_uri() . '/css/style-dist.css', false, null);
  	wp_register_style('es-mad-css', get_template_directory_uri() . '/css/es-mad.css', false, null);
  	wp_register_style('ico-mad-css', get_template_directory_uri() . '/css/icomoon.css', false, null);

    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('theme');
	wp_enqueue_style('es-mad-css');
	wp_enqueue_style('ico-mad-css');

/*
OPTIONAL: Bootstrap Theme enqueued
==================================
Delete (or comment-out) the next two lines of code below if you don't want the Bootstrap Theme.
*/
  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', false, null, false);
    wp_register_script('boot', get_template_directory_uri() . '/js/bootstrap.js', false, null, false);
    wp_register_script('dwn', get_template_directory_uri() . '/js/preload.js', false, null, false);
    wp_register_script('main', get_template_directory_uri() . '/js/main-dist.js', false, null, false);
	wp_register_script('es-mad-js', get_template_directory_uri() . '/js/es-mad.js', false, null, true);

	wp_enqueue_script('modernizr');
	wp_enqueue_script('boot');
	wp_enqueue_script('dwn');
    wp_enqueue_script('main');
	wp_enqueue_script('es-mad-js');


    if (is_woocommerce()) {
        wp_register_style('woomm', get_template_directory_uri() . '/css/woocommerce-dist.css', false, null);
        wp_enqueue_style('woomm');
    }

    if(is_front_page()){
        wp_register_style('ani-mad-css', get_template_directory_uri() . '/css/animate.css', false, null);
        wp_enqueue_style('ani-mad-css');

        wp_register_script('anima', get_template_directory_uri() . '/js/carousel.js', false, null, false);
        wp_enqueue_script('anima');
    }



	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'es_mad_enqueues', 100);
