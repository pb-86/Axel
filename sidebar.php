<?php
/**
 * The template for displaying sidebar with widget area
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.16
 */

?>

<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</ul>
<?php endif; ?>
