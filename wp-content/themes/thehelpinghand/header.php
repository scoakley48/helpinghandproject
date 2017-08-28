<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tribe_Studio_South_Beach
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://use.typekit.net/mel5wln.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'thehelpinghand' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="top-bar">
			<div class="container">
				<p><i class="fa fa-user" aria-hidden="true"></i>sign in</p>
			</div>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<div class="container">
				<div class="site-branding">
						<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://helpinghandproject.dev/wp-content/themes/thehelpinghand/images/hhp_logo.png"></a>
				</div><!-- .site-branding -->
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'thehelpinghand' ); ?></button>
					<div class="main-menu-container">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );
							?>
						</div>
				</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
