<?php 

namespace Related_Post\Includes;
use \Related_Post\Includes\Assets;

class Plugin{
    function __construct(){
        // Load hooks
        add_action('the_content', [$this, 'related_post_content']);

        // load assets
        $this->load_dependencies();
        new Assets();
    }

    function related_post_content( $content ){
        
        // check the single posts
        if( !is_single() && 'post' != get_post_type() ){
            return  $content;
        }

        //enqueue styles
        wp_enqueue_style('related_post_css');

        ob_start();

        $post_id = get_the_ID();
        $category = get_the_category($post_id);

        // retrive the assign post ID
        $term_id = array_map( function($item){
            return $item->term_id;
        }, $category);


        $args = array(
            'post_type' => 'post',
            'category__in' => $term_id,
            'post__not_in' => [$post_id],
            'posts_per_page' => 3
        );

        $query = new \WP_Query($args);

        if( $query->found_posts == 0 ){
            return $content;
        }

        // get the contents
        include RELATEDPOST__TEMPLATE . 'related-post-layout.php';
        $output = ob_get_contents();
        ob_end_clean ();

        return $content.$output;
    }

    function load_dependencies(){
        require_once RELATEDPOST__INCLUDE . 'related-post-asset.php';
    }
}