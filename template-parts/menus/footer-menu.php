<?php
/**
 * Menu w stopce.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.66.3
 */

wp_nav_menu(
	array(
		'container'       => 'nav',
		'container_id'    => 'axel-navbar-footer',
		'container_class' => 'axel-navbar axel-navbar--footer',
		'menu'            => 'footer_menu',
		'menu_id'         => 'axel-menu-footer',
		'menu_class'      => 'axel-menu axel-menu--footer',
		'theme_location'  => 'footer_menu',
	)
);
