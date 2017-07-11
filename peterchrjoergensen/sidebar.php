<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="one-third column" role="complementary">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside><!-- #secondary -->