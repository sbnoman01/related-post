<?php 

class Plugin{
    function __construct(){
        // hooks
        add_action('the_content', [$this, 'related_post_content']);
    }

    function related_post_content(){
        
        // check the single posts
        if( !is_singular('post')  ){
            return;
        }

        //
        

    }
}