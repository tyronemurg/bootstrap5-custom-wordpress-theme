<?php

register_nav_menus( array(
    'web-warrior-menu-main' => __( 'Primary Menu', 'web-warrior' ),));

function web_warrior_sidebar() {
    register_sidebar( array(
        'name' => __( 'Primary Sidebar', 'web-warrior' ),
        'id'   => 'sidebar-1',
    ) );
}
add_action( 'widgets_init', 'web_warrior_sidebar' );

add_theme_support( 'post-thumbnails' );
//add_image_size( 'my-custom-image-size', 640, 999 )


function theme_enqueue_scripts() {
        wp_enqueue_style( 'Bootstrap_4_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css' );
        // wp_enqueue_script( 'Jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
        // wp_enqueue_script( 'https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js');
        wp_enqueue_script( 'Bootstrap_5_JS', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js');
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css' );

        }

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


// function theme_add_woocommerce_support() {
//     add_theme_support( 'woocommerce' );
// }

// add_action( 'after_setup_theme', 'theme_add_woocommerce_support' );


// WC Template Functions Override
if ( ! function_exists( 'woocommerce_template_loop_product_title' ) ) {

    /**
     * Show the product title in the product loop. By default this is an H2.
     */
    function woocommerce_template_loop_product_title() {
        echo '<h2 class="text-center ' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</h2>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
}

ini_set('max_input_vars', 3000);
?>