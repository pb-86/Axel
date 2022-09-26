<?php
/**
 * File used to register and enqueue all JS files
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.66
 */

add_action( 'wp_enqueue_scripts', 'axel_scripts' );

/**
 * Registers and enqueues all required JS files.
 */
function axel_scripts() {
	wp_register_script( 'dropdown-menu', esc_url( AXEL_THEME_SCRIPTS . 'dropdown-menu.min.js' ), array(), AXEL_THEME_VERSION, true );
	wp_register_script( 'scroll-to-top', esc_url( AXEL_THEME_SCRIPTS . 'scroll-to-top.min.js' ), array(), AXEL_THEME_VERSION, true );

	wp_enqueue_script( 'dropdown-menu' );
	wp_enqueue_script( 'scroll-to-top' );
}
