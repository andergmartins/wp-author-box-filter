<?php
/**
 * Plugin Name: Author Box Filter
 * Description: Filters the box with the author's biography in your WordPress.
 * Version: 1.0.0
 * Author: andergmartins
 * Author URI: http://anderson.grudtner.me
 * Text Domain: author-box-filter
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 * GitHub Plugin URI: https://github.com/claudiosmweb/author-box-filter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function author_box_filter( $display ) {
	if ( $display ) {
		$display = 'post' === get_post_type();
	}

	return $display;
}

add_filter( 'authorbiobox_display', 'author_box_filter' );