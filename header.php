<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--
              ____      _               ____         _
             |  _ \ ___| |_ ___ _ __   / ___|       | | ____  _ __ __ _  ___ _ __  ___  ___ _ __
             | |_) / _ \ __/ _ \ '__| | |        _  | |/ _//\| '__/ _` |/ _ \ '_ \/ __|/ _ \ '_ \
             |  __/  __/ ||  __/ |    | |___ _  | |_| | (//) | | | (_| |  __/ | | \__ \  __/ | | |
             |_|   \___|\__\___|_|     \____(_)  \___/ \//__/|_|  \__, |\___|_| |_|___/\___|_| |_|
                                                                  |___/
                                        Designed and developed by
                            Peter C. Jørgensen | peterchrjoergensen.dk | @tehwave
         -->

        <meta name="title" content="<?php wp_title(); ?>")>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="author" content="Peter C. Jørgensen">

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Raleway:700,600,400,300'>

        <?php wp_head(); ?>

        <style type="text/css">
            body {
                background-image: url('<?php echo esc_url(get_template_directory_uri()) ?>/resources/img/overlay.png');
            }
        </style>
    </head>
    <body <?php body_class(); ?>>
        <!-- Header -->
        <header class="container header">
            <!-- Title -->
            <div class="row">
                <section class="col">
                    <h1 class="title">
                        <a href="//peterchrjoergensen.dk">Peter Christian Jørgensen</a>
                        <hr>
                    </h1>
                </section>
            </div>

            <!-- Navigation -->
            <nav class="row">
                <section class="col-12 col-sm-3"><a href="//peterchrjoergensen.dk/cv" title="Peter's Curriculum Vitae">C.V.</a></section>
                <section class="col-12 col-sm-3"><a href="//peterchrjoergensen.dk/portfolio" title="Peter's Portfolio">Portfolio</a></section>
                <section class="col-12 col-sm-3"><a href="//peterchrjoergensen.dk/blog/" title="Peter's Blog">Blog</a></section>
                <!-- Social -->
                <section class="col-12 col-sm-3">
                    <a href="mailto:hello@peterchrjoergensen.dk?subject=Hello" target="_top" class="icon" title="Send Peter an email">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path data-color="color-2" d="M15 1H1c-.6 0-1 .4-1 1v1.4l8 4.5 8-4.4V2c0-.6-.4-1-1-1z"/><path d="M7.5 9.9L0 5.7V14c0 .6.4 1 1 1h14c.6 0 1-.4 1-1V5.7L8.5 9.9c-.28.14-.72.14-1 0z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/peterchrjoergensen" target="_blank" rel="noopener" class="icon" title="Find Peter on LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M15.3 0H.7C.3 0 0 .3 0 .7v14.7c0 .3.3.6.7.6h14.7c.4 0 .7-.3.7-.7V.7c-.1-.4-.4-.7-.8-.7zM4.7 13.6H2.4V6h2.4v7.6zM3.6 5c-.8 0-1.4-.7-1.4-1.4 0-.8.6-1.4 1.4-1.4.8 0 1.4.6 1.4 1.4-.1.7-.7 1.4-1.4 1.4zm10 8.6h-2.4V9.9c0-.9 0-2-1.2-2s-1.4 1-1.4 2v3.8H6.2V6h2.3v1c.3-.6 1.1-1.2 2.2-1.2 2.4 0 2.8 1.6 2.8 3.6v4.2z"/></svg>
                    </a>
                    <a href="https://www.twitter.com/tehwave" target="_blank" rel="noopener" class="icon" title="Find Peter on Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z"/></svg>
                    </a>
                    <a href="https://www.github.com/tehwave" target="_blank" class="icon" title="Find Peter on GitHub">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 .2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V14c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z"/></svg>
                    </a>
                </section>
            </nav>
        </header>
    </body>
