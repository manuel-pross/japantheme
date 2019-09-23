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
			<div class="mainpicture-gallery__image-container is-active">
				<figure class="mainpicture-gallery__picture-caption">
					<img src="http://japanblog.local/wp-content/uploads/2019/09/20190811_144152.jpg" alt="active picture" class="mainpicture-gallery__slider-picture">
					<figcaption class="mainpicture-gallery__picture-subline">Osaka - Castle</figcaption>
				</figure>
			</div>
			<div class="mainpicture-gallery__image-container is-passive">
				<figure class="mainpicture-gallery__picture-caption">
					<img src="http://japanblog.local/wp-content/uploads/2019/09/20190809_174328.jpg" alt="passive picture 1" class="mainpicture-gallery__slider-picture">
					<figcaption class="mainpicture-gallery__picture-subline">Hirschpark - Nara</figcaption>
				</figure>
			</div>
			<div class="mainpicture-gallery__image-container is-passive">
				<figure class="mainpicture-gallery__picture-caption">
					<img src="http://japanblog.local/wp-content/uploads/2019/09/20190810_142320.jpg" alt="passive picture 2" class="mainpicture-gallery__slider-picture">
					<figcaption class="mainpicture-gallery__picture-subline">Kinkaku-ji - Kyoto</figcaption>
				</figure>
			</div>
			<div class="mainpicture-gallery__image-container is-passive">
				<figure class="mainpicture-gallery__picture-caption">
					<img src="http://japanblog.local/wp-content/uploads/2019/09/20190807_120158.jpg" alt="passive picture 3" class="mainpicture-gallery__slider-picture">
					<figcaption class="mainpicture-gallery__picture-subline">Hozu Fluss - Kyoto</figcaption>
				</figure>
			</div>
			<div class="mainpicture-gallery__image-container is-passive">
				<figure class="mainpicture-gallery__picture-caption">
					<img src="http://japanblog.local/wp-content/uploads/2019/09/20190807_103337.jpg" alt="passive picture 4" class="mainpicture-gallery__slider-picture">
					<figcaption class="mainpicture-gallery__picture-subline">Arashiyama - Kyoto</figcaption>
				</figure>
			</div>
			<div class="mainpicture-gallery__image-container is-passive">
				<figure class="mainpicture-gallery__picture-caption">
					<img src="http://japanblog.local/wp-content/uploads/2019/09/20190810_113640.jpg" alt="passive picture 5" class="mainpicture-gallery__slider-picture">
					<figcaption class="mainpicture-gallery__picture-subline">Fushimi Inari Taisha - Kyoto</figcaption>
				</figure>
			</div>
			<div class="mainpicture-gallery__image-container is-passive">
				<figure class="mainpicture-gallery__picture-caption">
					<img src="http://japanblog.local/wp-content/uploads/2019/09/20190805_135402.jpg" alt="passive picture 6" class="mainpicture-gallery__slider-picture">
					<figcaption class="mainpicture-gallery__picture-subline">Fujiyama</figcaption>
				</figure>
			</div>
		</div>
		<img src="http://japanblog.local/wp-content/uploads/2019/09/arrow-right.png" alt="arrow for next picture" class="mainpicture-gallery__slider-next">
	</div>
</div>
