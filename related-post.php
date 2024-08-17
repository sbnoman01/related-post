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
define( 'RELATEDPOST__FILE', plugin_dir_path( __FILE__ ) );
define( 'RELATEDPOST__INCLUDE', RELATEDPOST__FILE . 'includes/' );
define( 'RELATEDPOST__TEMPLATE', RELATEDPOST__FILE . 'template/' );
define( 'RELATEDPOST__URL', plugins_url( '/', __FILE__ ) );
define( 'RELATEDPOST__ASSETS', RELATEDPOST__URL . 'assets/' );

// check pluign compleatablity
if( !version_compare('7.4', '>=') ){
    add_action('admin_notice', 'version_notice');
}else{

    // Load the file
    require_once RELATEDPOST__FILE . '/includes/related-post-plugin.php';
    
    // Create instance
    if( class_exists('\Related_Post\Includes\Plugin') ){
        new \Related_Post\Includes\Plugin();
    }
}

function version_notice(){
    ?>
<div class="notice notice-warning is-dismissible">
				<p><?php __('Please update your PHP version to 7.4 .', 'textdomain') ?></p>
			</div>
    <?php
}