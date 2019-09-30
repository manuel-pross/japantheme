<?php
/*
Template Name: Reiseziele
*/
   get_header();
      if (have_posts()) :
         while(have_posts()) : the_post();
            the_content();
         endwhile;
      endif;

?>

<?php

   // check if the flexible content field has rows of data
   if( have_rows('destination_flexible') ):

      // loop through the rows of data
      while ( have_rows('destination_flexible') ) : the_row();

         if( get_row_layout() == 'layout_between' ):
            $img = get_sub_field('img');
            $img2 = get_sub_field('img2');
?>
               <div class="floating-text">
                  <h2 class="floating-text__heading"><?php the_sub_field('heading');?></h2>
                  <div class="floating-text__wrapper">
                        <div class="floating-text__image-container">
                           <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="floating-text__image">
                        </div>
                        <div class=floating-text__middle-wrapper>
                           <h3 class="floating-text__middle-heading"><?php the_sub_field('heading2');?></h3>
                           <p class="floating-text__description"><?php the_sub_field('description1'); ?></p>
                        </div>
                        <div class="floating-text__image-container">
                           <img src="<?php echo $img2['url']; ?>" alt="<?php echo $img2['alt']; ?>" class="floating-text__image">
                        </div>
                  </div>
                  <h3 class="floating-text__under-heading"><?php the_sub_field('heading3');?></h3>
                  <p class="floating-text__under-description"><?php the_sub_field('description2'); ?></p>
               </div>
<?php
         endif;
      endwhile;
   else :
      // no layouts found
   endif;

?>

<?php
   get_footer();
?>
