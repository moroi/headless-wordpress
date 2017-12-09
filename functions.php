<?php
add_theme_support('post-thumbnails', array('post'));
add_theme_support('menus'); 

function my_customize_rest_cors() {
  remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
  add_filter( 'rest_pre_serve_request', function( $value ) {
    header( 'Access-Control-Allow-Origin: *' );
    return $value;
  });
}
add_action( 'rest_api_init', 'my_customize_rest_cors', 15 );
?>
