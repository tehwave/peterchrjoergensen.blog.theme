<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

if (! is_active_sidebar('sidebar')) {
    return;
}
?>

<aside id="secondary" role="complementary">
    <?php get_search_form(true) ?>
    <article class="card">
        <section class="card-body">
           <?php dynamic_sidebar('sidebar'); ?>
        </section>
    </article>
</aside><!-- #secondary -->
