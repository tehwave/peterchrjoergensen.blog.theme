<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
?>

<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<!-- Main -->
		<main class="u-full-width">
			<!-- Article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
				<!-- Introduction -->
				<section class="parallax intro" data-parallax="scroll" data-speed="0.6" data-z-index="0"
					<?php if ( has_post_thumbnail() ) : ?>
						data-image-src="<?php echo esc_url( the_post_thumbnail_url() ) ?>"
					<?php else: ?>
						data-image-src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/img/index.jpg"
					<?php endif; ?>
				>
					<div class="container">
						<?php the_title('<h2>', '</h2>'); ?>
						<?php the_excerpt();?>
					</div>
				</section>

				<div class="container">
					<div class="row u-text-center">
						<!-- Meta -->
						<section class="three columns">
							<?php previous_post_link(); ?> &nbsp
						</section>
						<section class="six columns">
							<?php the_time('l, F jS, Y') ?> – <?php the_category(', ') ?>.
						</section>
						<section class="three columns">
							<?php next_post_link(); ?> &nbsp
						</section>
					</div>
					<div class="row">
						<hr>
						<!-- Content -->
						<div class="content">
							<?php the_content();?>
						</div>
					</div>
				</div>
			</article>
		</main>
	<?php
		endwhile;
	?>
<?php get_footer();
