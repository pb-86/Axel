<?php
/**
 * The template for displaying category pages
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.21
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<h2>
		<?php single_cat_title(); ?>
	</h2>
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'templates/parts/singular' );
		}
		the_posts_pagination();
	} else {
		get_template_part( 'templates/parts/noposts' );
	}
	?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
