<?php
/**
 * Plugin Name:       WP Learn Custom Image
 * Description:       Add a custom image block for testing.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-learn-html-api
 *
 * @package           create-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
add_action( 'init', 'wp_learn_custom_image_wp_learn_custom_image_block_init' );
function wp_learn_custom_image_wp_learn_custom_image_block_init() {
	register_block_type( __DIR__ . '/build' );
}

