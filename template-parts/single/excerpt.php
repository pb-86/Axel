<?php
/**
 * Skrót wpisu.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<article <?php post_class( 'excerpt' ); ?> id="post-<?php the_ID(); ?>">

	<?php
	get_template_part( 'template-parts/singular/thumbnail' );
	get_template_part( 'template-parts/singular/author' );
	get_template_part( 'template-parts/singular/date' );
	get_template_part( 'template-parts/singular/title', 'link' );
	get_template_part( 'template-parts/singular/content' );
	get_template_part( 'template-parts/singular/read-more' );
	?>

</article>
