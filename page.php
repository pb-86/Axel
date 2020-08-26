<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.16
 */

get_header();
?>

<main class="axel-main" role="main">
	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'templates/parts/singular' );
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
		wp_link_pages();
	}
	?>
</main>

<aside class="axel-sidebar" role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
