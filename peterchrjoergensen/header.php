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
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
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

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>

		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<meta name="title" content="<?php bloginfo('name'); ?> <?php wp_title(); ?>")>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="author" content="Peter C. Jørgensen">
	</head>
	<body <?php body_class(); ?>>
		<header class="container header text-center">
			<div class="row">
				<section class="u-full-width">
					<!-- Title -->
					<h1 class="title">
						<a href="/">Peter Christian Jørgensen</a>
					</h1>
					<hr>
				</section>
			</div>
			<nav class="row">
				<!-- Navigation -->
				<section class="three columns"><a href="/files/CV-Peter-Christian-Jørgensen.pdf">C.V.</a></section>
				<section class="three columns"><a href="/portfolio">Portfolio</a></section>
				<section class="three columns"><a href="https://blog.peterchrjoergensen.dk">Blog</a></section>
				<!-- Social -->
				<section class="three columns">
					<a href="mailto:hello@peterchrjoergensen.dk?subject=Hello" target="_top" class="icon" title="Send Peter an email">
						<svg class="nc-icon glyph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"><g><path data-color="color-2" fill="#0f0f0f" d="M15,1H1C0.4,1,0,1.4,0,2v1.4l8,4.5l8-4.4V2C16,1.4,15.6,1,15,1z"></path> <path fill="#0f0f0f" d="M7.5,9.9L0,5.7V14c0,0.6,0.4,1,1,1h14c0.6,0,1-0.4,1-1V5.7L8.5,9.9C8.22,10.04,7.78,10.04,7.5,9.9z"></path></g></svg>
					</a>
					<a href="https://www.linkedin.com/in/peterchrjoergensen" target="_blank" rel="noopener" class="icon" title="Find Peter on LinkedIn">
						<svg class="nc-icon glyph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"><g><path fill="#0f0f0f" d="M15.3,0H0.7C0.3,0,0,0.3,0,0.7v14.7C0,15.7,0.3,16,0.7,16h14.7c0.4,0,0.7-0.3,0.7-0.7V0.7 C16,0.3,15.7,0,15.3,0z M4.7,13.6H2.4V6h2.4V13.6z M3.6,5C2.8,5,2.2,4.3,2.2,3.6c0-0.8,0.6-1.4,1.4-1.4c0.8,0,1.4,0.6,1.4,1.4 C4.9,4.3,4.3,5,3.6,5z M13.6,13.6h-2.4V9.9c0-0.9,0-2-1.2-2c-1.2,0-1.4,1-1.4,2v3.8H6.2V6h2.3v1h0c0.3-0.6,1.1-1.2,2.2-1.2 c2.4,0,2.8,1.6,2.8,3.6V13.6z"></path></g></svg>
					</a>
					<a href="https://www.twitter.com/tehwave" target="_blank" rel="noopener" class="icon" title="Find Peter on Twitter">
						<svg class="nc-icon glyph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"><g><path fill="#0f0f0f" d="M16,3c-0.6,0.3-1.2,0.4-1.9,0.5c0.7-0.4,1.2-1,1.4-1.8c-0.6,0.4-1.3,0.6-2.1,0.8c-0.6-0.6-1.5-1-2.4-1 C9.3,1.5,7.8,3,7.8,4.8c0,0.3,0,0.5,0.1,0.7C5.2,5.4,2.7,4.1,1.1,2.1c-0.3,0.5-0.4,1-0.4,1.7c0,1.1,0.6,2.1,1.5,2.7 c-0.5,0-1-0.2-1.5-0.4c0,0,0,0,0,0c0,1.6,1.1,2.9,2.6,3.2C3,9.4,2.7,9.4,2.4,9.4c-0.2,0-0.4,0-0.6-0.1c0.4,1.3,1.6,2.3,3.1,2.3 c-1.1,0.9-2.5,1.4-4.1,1.4c-0.3,0-0.5,0-0.8,0c1.5,0.9,3.2,1.5,5,1.5c6,0,9.3-5,9.3-9.3c0-0.1,0-0.3,0-0.4C15,4.3,15.6,3.7,16,3z"></path></g></svg>
					</a>
				</section>
			</nav>
		</header>
	</body>