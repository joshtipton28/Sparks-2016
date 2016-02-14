<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-precomposed.png">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700|Days+One' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>
	<div data-sticky-container>
		<div class="header-container sticky" data-sticky data-options="marginTop:0;">
			<div class="row">
				<header id="masthead" class="site-header" role="banner">
					<div class="title-bar" data-responsive-toggle="site-navigation">
						<button class="menu-icon" type="button" data-toggle="offCanvas"></button>
						<div class="title-bar-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Test</a>
						</div>
					</div>

					<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
						<div class="top-bar-left">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sparks_logo.png" alt="Sparks Logo">
							</a>
						</div>
						<div class="top-bar-right">
							<?php foundationpress_top_bar_r(); ?>

							<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
								<?php get_template_part( 'parts/mobile-top-bar' ); ?>
							<?php endif; ?>
						</div>
					</nav>
				</header>
			</div>
		</div>
	</div>
	<section class="container">
		<?php do_action( 'foundationpress_after_header' ); ?>
