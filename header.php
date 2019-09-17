<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package japanblog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">
			<!-- <div class="main-navigation__container">
				<img src="http://localhost/japanBlog/wp-content/uploads/2019/09/cherry-blossom-1-2.png" class="main-navigation__icon">
			</div> -->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		<div class="image-header">
			<img class="image-header__navpicture" src="http://localhost/japanBlog/wp-content/uploads/2019/09/20190810_113640.jpg">
			<div class="image-header__navpicture-description-container">
				<h1 class="image-header__entry-title">Japan</h1>
				<p class="image-header__description">Discover a new world</p>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
