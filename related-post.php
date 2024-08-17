<?php 

/*
 * Plugin Name:       Related Post
 * Description:       Display related post in single page
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            sb Noman
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       related-post
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


define( 'RELATEDPOST_VERSION', '1.0.0' );
define( 'RELATEDPOST__FILE', __FILE__ );
// define( 'RELATEDPOST__FILE', __FILE__ );

// check pluign compleatablity
if( !version_compare('7.4', '') ){
    add_action('admin_notice', 'version_notice');
}else{
    require_once RELATEDPOST__FILE . '/includes/plugin.php';
    
}

function version_notice(){
    
}