<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package japanblog
 */

?>
<?php
	$image = get_field('img');
	//$about_me = get_field('about_me');
	//var_dump($about_me);
?>

<div class="about-me">
	<div class="about-me__imagecontainer">
		<?php if( !empty($image) ): ?>
			<img
				class="about-me__portrait"
				alt="<?php echo $image['alt']; ?>"
				src="<?php echo $image['url']; ?>"
				srcset="<?php echo wp_get_attachment_image_srcset( $image['id'], 'medium', null ); ?>"
				sizes="(max-width: 320px) 300px, 768px"
				/>
		<?php endif; ?>
	</div>
	<div class="about-me__textcontainer">
	<?php if( !empty(get_field('about_me')) ): ?>
		<h2 class="about-me__textcontainer-heading">
			<?php the_field('about_me'); ?>
		</h2>
	<?php endif; ?>
		<p class="about-me__textcontainer-description">
			<?php the_field('about_me_description') ?>
		</p>
	</div>
</div>

<div class="about-website">
	<h2 class="about-website__heading">
		<?php the_field('redfield_heading') ?>
	</h2>
	<p class="about-website__description">
		<?php the_field('about_website_description') ?>
	</p>
</div>

<div class="mainpicture-gallery">
	<h2 class="mainpicture-gallery__heading">
		<?php the_field('slider_heading')?>
	</h2>
	<div class="mainpicture-gallery__slider">
		<img src="http://japanblog.local/wp-content/uploads/2019/09/arrow-left.png" alt="arrow for previous picture" class="mainpicture-gallery__slider-prev">
		<div class="mainpicture-gallery__slider-inner">
			<img src="http://japanblog.local/wp-content/uploads/2019/09/20190811_144152.jpg" alt="active picture" class="is-active">
			<img src="http://japanblog.local/wp-content/uploads/2019/09/20190810_142320.jpg" alt="passive picture 1" class="is-passive">
			<img src="http://japanblog.local/wp-content/uploads/2019/09/20190807_120158.jpg" alt="passive picture 2" class="is-passive">
		</div>
		<img src="http://japanblog.local/wp-content/uploads/2019/09/arrow-right.png" alt="arrow for next picture" class="mainpicture-gallery__slider-next">
	</div>
</div>
