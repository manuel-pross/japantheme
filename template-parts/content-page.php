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
	$images = get_field('images');
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
		<div class="about-me__textcontainer-inner">
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
		<?php
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if( $images ): ?>
				<ul class="mainpicture-gallery__slider-inner">
					<?php foreach( $images as $image ): ?>
							<li class="mainpicture-gallery__image-container is-passive">
								<figure class="mainpicture-gallery__picture-caption">
									<?php echo wp_get_attachment_image( $image['ID'], $size, false,  array( "class" => "mainpicture-gallery__slider-picture" ) ); ?>
									<figcaption class="mainpicture-gallery__picture-subline"><?php echo $image['caption']; ?></figcaption>
								</figure>
							</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		<img src="http://japanblog.local/wp-content/uploads/2019/09/arrow-right.png" alt="arrow for next picture" class="mainpicture-gallery__slider-next">
	</div>
</div>
