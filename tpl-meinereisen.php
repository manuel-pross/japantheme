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

<div class="trip">
<?php
   // check if the flexible content field has rows of data
      if( have_rows('trip_flexible') ):
      // loop through the rows of data
         while ( have_rows('trip_flexible') ) : the_row();

            if( get_row_layout() == 'layout_flexible' ):
?>
               <div class="trip__heading">
                  <?php the_sub_field('trip_heading'); ?>
               </div>
               <div class="trip__image">
                  <?php
                     $tripImg = get_sub_field('trip_thumb');
                  ?>
                  <img src="<?php echo $tripImg['url']; ?>" alt="">
               </div>
               <div class="trip__description">
                  <?php the_sub_field('trip_description'); ?>
               </div>
<?php
            endif;
            if( get_row_layout() == 'layout_img_and_text' ):
?>
               <div class="trip__image">
                  <?php
                     $tripImg = get_sub_field('trip_img');
                  ?>
                  <img src="<?php echo $tripImg['url']; ?>" alt="">
               </div>
               <div class="trip__description">
                  <?php the_sub_field('trip_img_descr'); ?>
               </div>
<?php
            endif;
         endwhile;
      else :
      // no layouts found
      endif;
?>
</div>

<?php get_footer();?>
