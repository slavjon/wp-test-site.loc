<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-test-site
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'wp-test-site'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding container">
				<div class="row">
					<div class="col-12 col-md-9">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
						else :
						?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
						endif;
						$wp_test_site_description = get_bloginfo('description', 'display');
						if ($wp_test_site_description || is_customize_preview()) :
						?>
							<p class="site-description"><?php echo $wp_test_site_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
														?></p>
						<?php endif; ?>
					</div>
					<div class="col-12 col-md-3">
						<div class="header__contacts">
							<a href="tel:<?php echo get_option('site_phone'); ?>" class="phone">Phone: <?php echo get_option('site_phone'); ?></a>
							<a href="mailto:<?php echo get_option('theme_email'); ?>" class="email"><?php echo get_option('theme_email'); ?></a>
							
							
						</div>
					</div>
				</div> <!-- end row -->
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation container">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'wp-test-site'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->