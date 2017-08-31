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
                    <div class="row text-center">
                        <!-- Meta -->
                        <section class="col-3">
                            <?php previous_post_link(); ?> &nbsp
                        </section>
                        <section class="col-6">
                            <?php the_time('l, F jS, Y') ?> – <?php the_category(', ') ?>.
                        </section>
                        <section class="col-3">
                            <?php next_post_link(); ?> &nbsp
                        </section>
                    </div>
                    <div class="row mt-4">
                        <section class="col">
                            <!-- Content -->
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
