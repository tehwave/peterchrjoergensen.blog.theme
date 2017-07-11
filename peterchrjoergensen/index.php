<?php
/**
 * The main template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
?>

<?php get_header(); ?>

		<!-- Main -->
		<main class="u-full-width">
			<!-- Introduction -->
			<section class="parallax intro" data-parallax="scroll" data-speed="0.6" data-image-src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/img/index.jpg" data-natural-width="1920" data-natural-height="1080" data-z-index="0">
				<div class="container">
					<h2>Welcome,</h2>
					<p>This is my blog.</p>
					<p><?php echo bloginfo('description'); ?></p>
				</div>
			</section>

			<!-- Latest Posts -->
			<div class="container projects text-center">
			</div>
		</main>

<?php get_footer();
