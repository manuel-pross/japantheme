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

<?php
	$image = get_field('header_img');
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
	<div class="burger-icon">
		<div class="burger-icon__lines">
			<div class="burger-icon__line" role="menu"></div>
		</div>
		</label>
	</div>

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		<div class="image-header">
		<?php
			if( !empty($image) ): ?>
				<img
				src="<?php echo $image['url']; ?>"
				alt="<?php echo $image['alt']; ?>"
				class="image-header__navpicture"
				/>
		<?php endif; ?>
			<div class="image-header__navpicture-description-container">
				<h1 class="image-header__entry-title">
					<?php
						if(strlen(get_field('header_title')) <= 5) {
							the_field('header_title');
						}else {
							echo "ZU LANG!!! SIEHST DOCH DASS ES KACKE AUSSIEHT. HÖCHSTENS 5 ZEICHEN!!!";
						}
					?>
				</h1>
				<p class="image-header__description">
					<?php
						if(strlen(get_field('header_description')) <= 20) {
							the_field('header_description');
						}else {
							echo "ZU LANG!!! SIEHST DOCH DASS ES KACKE AUSSIEHT. HÖCHSTENS 20 ZEICHEN!!!";
						}
					?>
				</p>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
