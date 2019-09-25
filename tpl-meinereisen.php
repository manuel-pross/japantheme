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

            if( get_row_layout() == 'layout_flexible' ):
?>
               <div class="trip-thumbnail">
                  <div class="trip-thumbnail__container">
                     <h2 class="trip-thumbnail__heading"><?php the_sub_field('trip_heading'); ?></h2>
                     <?php
                        $tripImg = get_sub_field('trip_thumb');
                     ?>
                     <img src="<?php echo $tripImg['url']; ?>" alt="<?php echo $tripImg['alt']; ?>" class="trip-thumbnail__image">
                     <p class="trip-thumbnail__description"><?php the_sub_field('trip_description'); ?></p>
                  </div>
               </div>
<?php
            endif;
            if( get_row_layout() == 'layout_imgs_and_text' ):
?>
               <div class="trip-heading-imgs-descr">
                  <h2 class="trip-heading-imgs-descr__heading"><?php the_sub_field('trip_imgs_heading'); ?></h2>
                  <?php $tripImgs = get_sub_field('trip_imgs_gallery'); ?>
                  <?php
                     $size = 'full'; // (thumbnail, medium, large, full or custom size)
                     if( $tripImgs ): ?>
                        <ul class="trip-heading-imgs-descr__images-container">
                           <?php foreach( $tripImgs as $image ): ?>
                                 <li class="trip-heading-imgs-descr__image-container">
                                    <?php echo wp_get_attachment_image( $image['ID'], $size, false,  array( "class" => "trip-heading-imgs-descr__image" ) ); ?>
                                 </li>
                           <?php endforeach; ?>
                        </ul>
                     <?php endif; ?>
                     <p class="trip-heading-imgs-descr__description"><?php the_sub_field('trip_imgs_description'); ?></p>
               </div>
<?php
            endif;
         endwhile;
      else :
      // no layouts found
      endif;
?>
<?php get_footer();?>
