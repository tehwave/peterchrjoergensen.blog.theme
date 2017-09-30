<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
?>

<?php get_header(); ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <!-- Main -->
        <main>
            <!-- Article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                <!-- Introduction -->
                <section class="parallax intro" data-parallax="scroll" data-speed="0.6" data-z-index="0"
                    <?php if (has_post_thumbnail()) : ?>
                        data-image-src="<?php echo esc_url(the_post_thumbnail_url()) ?>"
                    <?php else : ?>
                        data-image-src="<?php echo esc_url(get_template_directory_uri()) ?>/resources/img/index.jpg" data-natural-width="1920" data-natural-height="1277"
                    <?php endif; ?>
                >
                    <div class="container">
                        <div class="row">
                            <section class="col">
                                <?php the_title('<h2 class="h1">', '</h2>'); ?>
                                <?php the_excerpt();?>
                            </section>
                        </div>
                    </div>
                </section>

                <div class="container">
                    <!-- Meta -->
                    <div class="row text-center">
                        <div class="col">
                            <div class="card">
                                <section class="card-body">
                                    <div class="row">
                                        <section class="col-6 order-2 col-md-3 order-md-1">
                                            <?php if (get_previous_post()) : ?>
                                                <small>Previous</small>
                                                <div><?php previous_post_link('%link'); ?></div>
                                            <?php endif; ?>
                                        </section>
                                        <section class="col-12 order-1 mb-4 col-md-6 order-md-2 mb-md-0">
                                            <div><?php the_time('F jS, Y') ?></div>
                                            <div><?php the_category(', ') ?></div>
                                        </section>
                                        <section class="col-6 order-3 col-md-3 order-md-3">
                                            <?php if (get_next_post()) : ?>
                                                <small>Next</small>
                                                <div><?php next_post_link('%link'); ?></div>
                                            <?php endif; ?>
                                        </section>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="row mt-4">
                        <section class="col">
                            <div class="content">
                                <?php the_content();?>
                            </div>
                        </section>
                    </div>
                </div>
            </article>
        </main>
    <?php endwhile; ?>
<?php get_footer();
