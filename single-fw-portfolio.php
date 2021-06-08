<?php
/**
* The template for displaying Portfolio
*
* This is the template that displays all Portfolio by default.
*
* @package WordPress
* @subpackage grand
* @since grand 1.0
*/

get_header();

/**
* etdukandari_etcodes_main_title hook.
*
*/
do_action( 'etdukandari_etcodes_main_title' );

// Start the Loop.
while ( have_posts() ) : the_post();
?>

<div class="single-project mb_50">

  <?php get_template_part( 'template-parts/parts/content', get_post_format() ); ?>

  <div class="fluid-container px-5-percent">
    <div class="divider mt-5 mb-4"></div>
    <div class="d-flex justify-content-between">
      <a class="post_read_more_btn mr-2" href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>"><i class="fa fa-long-arrow-left fa-lg mr-2" aria-hidden="true"></i>  </a>
      <a class="post_read_more_btn" href="#"><i class="fa fa-th-large fa-lg" aria-hidden="true"></i></a>
      <a class="post_read_more_btn ml-2" href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>"> <i class="fa fa-long-arrow-right fa-lg ml-2" aria-hidden="true"></i></a>
    </div>
  </div>
</div>


<?php 
endwhile;
get_footer(); ?>