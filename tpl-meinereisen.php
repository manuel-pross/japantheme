<?php
/*
Template Name: MeineReisen
*/

get_header(); ?>

<div>

   <?php if (have_posts()) : while(have_posts()) : the_post();?>
      <?php the_content();?>
<?php endwhile;endif;?>

<div class="cool-container">

<?php
// check if the flexible content field has rows of data
if( have_rows('first_flexible_content') ):

     // loop through the rows of data
    while ( have_rows('first_flexible_content') ) : the_row();

      if( get_row_layout() == 'text_image' ): ?>

         <div class="cool-text">
            <?php the_sub_field('text'); ?>
         </div>
         <div class="cool-image">
            <?php
               $img = get_sub_field('image');
            ?>
            <img src="<?php echo $img['url']; ?>" alt="">
         </div>

         <?php
        endif;

    endwhile;

else :

    // no layouts found

endif; ?>
</div>
</div>

<?php get_footer();?>
