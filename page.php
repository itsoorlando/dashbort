<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Dukandari
 * @since Dukandari 1.0
 */

get_header(); 

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

    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $thumb = get_post_thumbnail_id();
    $img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
    $image = aq_resize( $img_url, 848, 600, true,true,true ); //
    $image_title =  get_the_title( get_post_thumbnail_id() );
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( $image ) : ?>
          <div class="post-img">
            <img src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($image_title) ?>">
          </div>
        <?php endif; ?>
        <div class="post-content entry-content">
          <?php the_content(); ?> 
        </div>
      </article>
        <div class="blog-post-comments"> 
          <?php 
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template('', true);
            endif;
          ?>
        </div>
    <?php endwhile; else: ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'dukandari' ); ?></p>
    <?php endif;  ?>

  <?php 
  /**
  * etdukandari_etcodes_before_inside_container_close hook.
  */
  do_action( 'etdukandari_etcodes_before_inside_container_close' );


/**
 * etdukandari_etcodes_after_container_close hook.
 *
 */
do_action( 'etdukandari_etcodes_after_container_close' );

get_footer(); ?>