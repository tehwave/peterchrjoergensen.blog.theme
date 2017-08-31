<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */

get_header(); ?>

        <!-- Main -->
        <main>
            <!-- Header -->
            <section class="parallax intro" data-parallax="scroll" data-speed="0.6" data-image-src="<?php echo esc_url(get_template_directory_uri()) ?>/resources/img/index.jpg" data-natural-width="1920" data-natural-height="1277" data-z-index="0">
                <div class="container">
                    <div class="row">
                        <section class="col-md-8 m-auto">
                            <?php if (have_posts()) : ?>
                                <h1 class="h2">Search</h1>
                            <?php else: ?>
                                <h1 class="h2"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
                            <?php endif; ?>
                        </section>
                    </div>
                    <div class="row">
                        <section class="col-md-8 m-auto">
                            <?php echo get_search_form(); ?>
                        </section>
                    </div>
                </div>
            </section>

            <!-- Search Results -->
            <div class="container">
                <div class="row">
                    <section class="col-md-8 m-auto text-center">
                        <p class="lead"><?php global $wp_query; echo $count = $wp_query->found_posts ?> <?php echo _n('result', 'results', $count) ?> shown  for "<?php echo get_search_query(); ?>"</p>
                    </section>
                </div>
                <div class="row">
                    <section class="col-md-8 m-auto">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : ?>
                                <?php the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class('card mb-5 post'); ?>>
                                    <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top img-fluid']) ?>
                                    <section class="card-body">
                                        <h1 class="card-title"><?php the_title('<a href="'.esc_url(get_permalink()).'" rel="bookmark">', '</a>'); ?></h1>
                                        <h2 class="card-subtitle mb-2 text-muted h6"><?php the_time('l, F jS, Y') ?></h2>
                                        <p class="card-text"><?php the_excerpt();?></p>
                                        <span class="card-link"><?php the_category(', ') ?></span>
                                    </section>
                                </article>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </section>
                </div>
            </div>
        </main>
<?php get_footer();
