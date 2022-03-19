<?php

include 'compatibility/woomode.php';

if ( !function_exists( 'metrostore_child_woocommerce_before_shop_loop_item' ) ) {

    function metrostore_child_woocommerce_before_shop_loop_item() {

        global $post, $product;

        include 'views/shop-view.php';
    }

}



if ( !function_exists( 'metrostore_child_setup' ) ) {

    function metrostore_child_setup() {
        remove_action( 'woocommerce_before_shop_loop_item', 'metrostore_woocommerce_before_shop_loop_item', 9 );
        add_action( 'woocommerce_before_shop_loop_item', 'metrostore_child_woocommerce_before_shop_loop_item', 9 );
    }

}

add_action( 'after_setup_theme', 'metrostore_child_setup', 999 );


