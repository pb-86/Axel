<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.16
 */

get_header();
?>

<main class="axel-main" role="main">
	<h2>
		<?php esc_html_e( 'Recent posts', 'axel' ); ?>
	</h2>
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'templates/parts/excerpt' );
		}
		the_posts_pagination();
	} else {
		get_template_part( 'templates/parts/noposts' );
	}
	?>
</main>

<aside class="axel-sidebar" role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
