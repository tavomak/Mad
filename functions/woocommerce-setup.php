<?php
// WooCommerce functions
if ( ! function_exists( 'es_mad_woocommerce_setup' ) ) :
  function es_mad_woocommerce_setup() {
    add_theme_support( 'woocommerce' );
  }
endif;
add_action( 'after_setup_theme', 'es_mad_woocommerce_setup' );
/*
Set Default Thumbnail Sizes for WooCommerce Product Pages, on Theme Activation
*/
global $pagenow;
if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) add_action( 'init', 'es_mad_woocommerce_image_dimensions', 1 );
/*
Define image sizes
*/
function es_mad_woocommerce_image_dimensions() {
  $catalog = array(
		'width' 	=> '350',	// px
		'height'	=> '350',	// px
		'crop'		=> 1 		// true
	);
	$single = array(
		'width' 	=> '570',	// px
		'height'	=> '570',	// px
		'crop'		=> 1 		// true
	);
	$thumbnail = array(
		'width' 	=> '250',	// px
		'height'	=> '250',	// px
		'crop'		=> 0 		// false
	);
	// Image sizes
	update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
	update_option( 'shop_single_image_size', $single ); 		// Single product image
	update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
}
/*
 * Add basic WooCommerce template support
 *
 */
// Remove original WooCommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
// Add BST Plus wrappers
add_action('woocommerce_before_main_content', 'es_mad_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'es_mad_wrapper_end', 10);
function reinnervate_wrapper_start() {
  echo '<main id="main" class="site-main" role="main">';
}
function es_mad_wrapper_end() {
  echo '</main>';
}
/*
Remover tablas
*/
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;}

//Remove Sales Flash
add_filter('woocommerce_sale_flash', 'woo_custom_hide_sales_flash');
function woo_custom_hide_sales_flash()
{
    return false;
}

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );//remove "Sort By"

/** Remove Showing results functionality site-wide */
function woocommerce_result_count() {
        return;
}

function cambiar_productos_por_pagina() {
return 6;
}
add_filter( 'loop_shop_per_page', 'cambiar_productos_por_pagina' );

/*
Place a cart icon with number of items and total cost in the menu bar.
*/
/*function es_mad_woomenucart($menu, $args) {
	// Check if WooCommerce is active and add a new item to a menu assigned to "Navbar Upper Right" (Primary Navigation Menu) location
	if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) || 'navbar-upper-right' !== $args->theme_location )
		return $menu;
	ob_start();
		global $woocommerce;
		$viewing_cart = __('View your shopping cart', 'es-mad');
		$start_shopping = __('Start shopping', 'es-mad');
		$cart_url = $woocommerce->cart->get_cart_url();
		$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
		$cart_contents_count = $woocommerce->cart->cart_contents_count;
		$cart_contents = sprintf(_n('%d item', '%d items', $cart_contents_count, 'es-mad'), $cart_contents_count);
		$cart_total = $woocommerce->cart->get_cart_total();
    if ($cart_contents_count == 0) {
      $menu_item = '<li class="pull-right"><a class="woo-menu-cart" href="'. $shop_page_url .'" title="'. $start_shopping .'">';
    } else {
      $menu_item = '<li class="pull-right"><a class="woo-menu-cart" href="'. $cart_url .'" title="'. $viewing_cart .'">';
    }
    $menu_item .= '<i class="fa fa-shopping-cart"></i> ';
    $menu_item .= $cart_contents.' - '. $cart_total;
    $menu_item .= '</a></li>';
		echo $menu_item;
	$social = ob_get_clean();
	return $menu . $social;
}
add_filter('wp_nav_menu_items','es_mad_woomenucart', 10, 2);*/

/*
Place a BSF currency.
*/
add_filter( 'woocommerce_currencies', 'add_my_currency' );

function add_my_currency( $currencies ) {
     $currencies['VEF'] = __( 'Bolivar', 'woocommerce' );
     return $currencies;
}
add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'VEF': $currency_symbol = 'Bs.'; break;
     }
     return $currency_symbol;
}
