<?php 

namespace Related_Post\Includes;

class Assets{
    function load_assets(){
        wp_register_style( 'my_css', 	plugins_url( 'style.css', 	 __FILE__ ), false,   $my_css_ver );
    }
}