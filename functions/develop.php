<?php

//añadir capacidad de woocommerce a usuarios editores

function add_theme_caps() {
    // gets the author role
    $role = get_role( 'editor' );

    // This only works, because it accesses the class instance.
    // would allow the author to edit others' posts for current theme only
    //$role = get_role( 'editor' );
    $role->add_cap( 'edit_products' );
    $role->add_cap( 'manage_woocommerce' );
    $role->add_cap( 'view_woocommerce_reports' );
    $role->add_cap( 'manage_woocommerce_products' );
    $role->add_cap( 'edit_others_products' );
}
add_action( 'admin_init', 'add_theme_caps');

/* Disable WordPress Admin Bar for all users but admins. */
  show_admin_bar(false);


// CUSTOM ADMIN LOGIN HEADER LOGO

function my_custom_login_logo()
{
    echo '<style  type="text/css"> h1 a {  background-image:url(' . get_bloginfo('template_directory') . '/img/logo_admin.png)  !important;} </style>';
}
add_action('login_head',  'my_custom_login_logo');


function add_last_nav_item($items) {
  return $items .= '<li> <a type="button" data-toggle="modal" data-target="#escribenos">Contacto</a></li>';
}
add_filter('wp_nav_menu_items','add_last_nav_item');


?>
