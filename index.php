<?php
/**
 * The main template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
?>
<?php get_header(); ?>

        <!-- Main -->
        <main>
            <!-- Introduction -->
            <section class="parallax intro" data-parallax="scroll" data-speed="0.6" data-image-src="<?php echo esc_url(get_template_directory_uri()) ?>/resources/img/index.jpg" data-natural-width="1920" data-natural-height="1277" data-z-index="0">
                <div class="container">
                    <div class="row">
                        <section class="col">
                            <h2 class="h1">Welcome,</h2>
                            <p> You have found my personal blog, where I talk about the <b>ideas</b>, the <b>insights</b> and the <b>techniques</b> behind my projects.</p>
                            <p>In addition, I post about <b>news</b>, <b>events</b> and <b>resources</b> relevant to the <a href="https://twitter.com/search?f=tweets&vertical=default&q=%23webdev%20AND%20from%3A%40tehwave" target="_blank" rel="noopener" class="twitter-search">#webdev</a> & <a href="https://twitter.com/search?f=tweets&vertical=default&q=%23gamedev%20AND%20from%3A%40tehwave" target="_blank" rel="noopener" class="twitter-search">#gamedev</a> communities.</p>
                        </section>
                    </div>
                </div>
            </section>

            <!-- Latest Posts & Sidebar -->
            <div class="container">
                <div class="row">
                    <section class="col-md-8">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : ?>
                                <?php  the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                                    <?php the_title('<h1><a href="'.esc_url(get_permalink()).'" rel="bookmark">', '</a></h1>'); ?>
                                    <p class="lead"><?php the_time('l, F jS, Y') ?> – <?php the_category(', ') ?>.</p>
                                    <?php the_excerpt();?>
                                    <hr>
                                </article>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </section>
                    <section class="col-md-4">
                        <?php get_sidebar(); ?>
                    </section>
                </div>
                <div class="row">
                    <section class="col">
                        <?php
                            global $wp_query;

                            echo paginate_links([
                                'base' => str_replace($big = 999999999, '%#%', esc_url(get_pagenum_link($big))),
                                'format' => '?paged=%#%',
                                'current' => max(1, get_query_var('paged')),
                                'total' => $wp_query->max_num_pages
                            ]);
                        ?>
                    </section>
                </div>
            </div>
        </main>
<?php get_footer();
