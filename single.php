<?php get_header();

/**
 * etdukandari_etcodes_main_title hook.
 *
 */
do_action( 'etdukandari_etcodes_main_title' );

/**
 * etdukandari_etcodes_before_container_open hook.
 *
 */
do_action( 'etdukandari_etcodes_before_container_open' );

/**
 * etdukandari_etcodes_after_inside_container_open hook.
 *
*/
do_action( 'etdukandari_etcodes_after_inside_container_open' );

// Start the Loop.
while ( have_posts() ) : the_post();
?>

      <div class="blog_posts stander_blog  stander_blog_single_post">
      <?php
          /*
           * Include the post format-specific template for the content. If you want to
           * use this in a child theme, then include a file called called content-___.php
           * (where ___ is the post format) and that will be used instead.
           */
          get_template_part( 'template-parts/post/content', get_post_format() );

          // If comments are open or we have at least one comment, load up the comment template.
      ?>

      <div class="blog-post-comments"> 
          <?php 
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template('', true);
            endif;
          ?>
        </div>
      </div>

<?php 
  endwhile;

/**
 * etdukandari_etcodes_before_inside_container_close hook.
 *
 */
do_action( 'etdukandari_etcodes_before_inside_container_close' );

/**
 * etdukandari_etcodes_after_container_close hook.
 *
 */
do_action( 'etdukandari_etcodes_after_container_close' );

get_footer(); ?>