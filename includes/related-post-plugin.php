<?php 

namespace Related_Post\Includes;
use \Related_Post\Includes\Assets;

class Plugin{
    function __construct(){
        // hooks
        add_action('the_content', [$this, 'related_post_content']);

        // load assets
        // require_once RELATEDPOST__INCLUDE
        $this->load_dependencies();
        new Assets();
    }

    function related_post_content( $content ){
        
        // check the single posts
        // if( !is_singular('post')  ){
        //     return  $content;
        // }

        //

        //enqueue styles
        wp_enqueue_style('related_post_css');
        
        include RELATEDPOST__TEMPLATE . 'related-post-layout.php';
        
        echo 'single';
    }

    function load_dependencies(){
        require_once RELATEDPOST__INCLUDE . 'related-post-asset.php';
    }
}