<?php
/*
Template Name: MeineReisen
*/

get_header(); ?>

<?php
   if (have_posts()) :
      while(have_posts()) : the_post();
         the_content();
      endwhile;
   endif;
?>

<?php
   // check if the flexible content field has rows of data
      if( have_rows('trip_flexible') ):
      // loop through the rows of data
         while ( have_rows('trip_flexible') ) : the_row();

            if( get_row_layout() == 'layout_thumbnail' ):
?>
               <div class="thumbnail">
                  <figure class="thumbnail__container">
<?php
                        $tripImg = get_sub_field('img');
?>
                     <img src="<?php echo $tripImg['url']; ?>" alt="<?php echo $tripImg['alt']; ?>" class="thumbnail__image">
                     <figcaption class="thumbnail__caption">
                        <h2 class="thumbnail__heading"><?php the_sub_field('heading'); ?></h2>
                     </figcaption>
                  </figure>
                  <p class="thumbnail__description"><?php the_sub_field('descr'); ?></p>
                  </div>
<?php
            endif;
            if( get_row_layout() == 'layout_imgs_and_text' ):
?>
               <div class="trip-heading-imgs-descr">
                  <h3 class="trip-heading-imgs-descr__heading"><?php the_sub_field('trip_imgs_heading'); ?></h3>
                  <?php $tripImgs = get_sub_field('trip_imgs_gallery'); ?>
                  <?php
                     $size = 'full'; // (thumbnail, medium, large, full or custom size)
                     $counter = 1;
                     if( $tripImgs ): ?>
                        <ul class="trip-heading-imgs-descr__images-container">
                           <?php foreach( $tripImgs as $image ): ?>
                                 <li class="<?php echo("trip-heading-imgs-descr__image-container linumber". $counter)?>">
<?php
                                    echo wp_get_attachment_image( $image['ID'], $size, false,  array( "class" => "trip-heading-imgs-descr__image number" . $counter) );
                                    $counter++;
?>
                                 </li>
                           <?php endforeach; ?>
                        </ul>
                     <?php endif; ?>
                     <p class="trip-heading-imgs-descr__description"><?php the_sub_field('trip_imgs_description'); ?></p>
               </div>
<?php
            endif;
            if( get_row_layout() == 'layout_img_text' ):
               if(get_sub_field('toggle')):
?>
                  <div class="picture-left">
                     <div class="picture-left__container">
                           <h3 class="picture-left__heading"><?php the_sub_field('heading'); ?></h3>
                           <p class="picture-left__description"><?php the_sub_field('descr'); ?></p>
                     </div>
                     <?php $img = get_sub_field('img');?>
                        <figure class="picture-left__figure">
                           <img src="<?php echo $img['url']; ?>" alt="<?php echo $tripimg['alt']; ?>" class="picture-left__image">
                           <figcaption class="picture-left__caption-container">
                              <span class="picture-left__caption"><?php echo $img['caption']; ?></span>
                           </figcaption>
                        </figure>
                  </div>
<?php
               else:
?>
                  <div class="picture-right">
                     <div class="picture-right__container">
                        <h3 class="picture-right__heading"><?php the_sub_field('heading'); ?></h3>
                        <p class="picture-right__description"><?php the_sub_field('descr'); ?></p>
                     </div>
                     <figure class="picture-right__figure">
                        <?php $img = get_sub_field('img');?>
                        <img src="<?php echo $img['url']; ?>" alt="<?php echo $tripimg['alt']; ?>" class="picture-right__image">
                        <figcaption class="picture-right__caption-container">
                           <span class="picture-right__caption"><?php echo $img['caption']; ?></span>
                        </figcaption>
                     </figure>
                  </div>
<?php          endif;

            endif;
         endwhile;
      else :
      // no layouts found
      endif;
?>
<?php get_footer();?>
