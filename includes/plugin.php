<?php 

namespace Related_Post\Includes;
class Plugin{
    function __construct(){
        // hooks
        add_action('the_content', [$this, 'related_post_content']);

        // load assets
        
    }

    function related_post_content(){
        
        // check the single posts
        if( !is_singular('post')  ){
            return;
        }

        //
        echo 'single';
        echo RELATEDPOST__ASSETS . '/plugin.css';
    }
}