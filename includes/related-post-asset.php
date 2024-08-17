<?php 

namespace Related_Post\Includes;

class Assets{
    function __construct(){
        add_action( 'wp_enqueue_scripts', [$this, 'load_assets'] );
    }
    function load_assets(){
        wp_register_style( 'related_post_css', 	RELATEDPOST__ASSETS . 'plugin.css', [], false, 'all'  );
    }
}