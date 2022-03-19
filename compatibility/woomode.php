<?php

function metrostore_register_woomode_view_locations( $view_locations ) {

    $view_locations[ 'shop' ][ 'before_title' ][ 'hook' ] = 'metrostore_child_before_title';
    $view_locations[ 'shop' ][ 'before_title' ][ 'priority' ] = 10;
    
    return $view_locations;
}

add_filter( 'woomode/register-view-locations', 'metrostore_register_woomode_view_locations', 999 );

