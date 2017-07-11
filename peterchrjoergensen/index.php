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
					<h2>
						Welcome,
					</h2>
					<p>
						You have found my personal blog, where I talk about the <b>ideas</b>, the <b>insights</b> and the <b>techniques</b> behind my projects.
					</p>
					<p>
						In addition, I post about <b>news</b>, <b>events</b> and <b>resources</b> relevant to the <a href="https://twitter.com/search?f=tweets&vertical=default&q=%23webdev%20AND%20from%3A%40tehwave" target="_blank" rel="noopener" class="twitter-search">#webdev</a> & <a href="https://twitter.com/search?f=tweets&vertical=default&q=%23gamedev%20AND%20from%3A%40tehwave" target="_blank" rel="noopener" class="twitter-search">#gamedev</a> communities.
					</p>
				</div>
			</section>

			<!-- Latest Posts & Sidebar -->
			<div class="container">
				<div class="row">
					<section class="two-thirds column">
						<h2>Latest posts</h2>
						<hr>
						<?php
							if ( have_posts() ) : while ( have_posts() ) : the_post();
								?><h2><?php the_title(); ?></h2><?php
								?><small>This entry was posted on 
								<?php the_time('l, F jS, Y') ?> at 
								<?php the_time() ?> and is filed 
								under <?php the_category(', ') ?>. You 
								can follow any responses to this entry 
								through the <?php comments_rss_link('RSS 2.0'); ?> 
								feed.</small><br><?php
								the_excerpt();
							endwhile; endif
						?>
					</section>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</main>

<?php get_footer();
