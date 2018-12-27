<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KCHAesthetics
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/30ef04f5-766c-4e57-9004-5411af80b5e6.css"/>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



	<header id="site-header" role="banner">
	    <nav class="navbar navbar-expand-lg navbar-light">

	    	<div class="container">
		    	<div class="siteName">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="mainLogo"></div></a>
				</div>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
		   		<div class="collapse navbar-collapse justify-content-left mt-4 pl-4" id="navbarNav">
	            <?php
	            $args = array(
	              'theme_location' => 'primary',
	              'depth'      => 2,
	              'container'  => false,
	              'menu_class'     => 'navbar-nav',
	              'walker'     => new Bootstrap_Walker_Nav_Menu()
	              );
	            if (has_nav_menu('primary')) {
	              wp_nav_menu($args);
	            }
	            ?>
	          </div>

	        </div>
		</nav>
	</header><!-- #masthead -->

