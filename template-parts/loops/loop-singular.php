<?php
/**
 * Pętla dla wpisów i stron.
 *
 * @package WordPress
 * @subpackage Axel
 */

while ( have_posts() ) {
	the_post();
	get_template_part( 'template-parts/singular/singular' );
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	wp_link_pages();
}
