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

if (function_exists('fw_get_db_settings_option')) {
  $etdukandari_etcodes_posts_settings = fw_get_db_settings_option('posts_settings');
}
$etdukandari_etcodes_blog_style = isset($etdukandari_etcodes_posts_settings['blog_type']) ? $etdukandari_etcodes_posts_settings['blog_type'] : 'stander_blog';

if ($etdukandari_etcodes_blog_style == 'stander_blog') {
  $columns_classes = 'col-md-12 col-sm-6 grid-item';
  } else {
  $columns_classes = 'col-md-6 col-lg-4 grid-item';
}

$loop_container_classes = 'blog_posts stander_blog blog-no-border';

  if ($etdukandari_etcodes_blog_style == 'stander_blog') {
    $loop_container_classes = 'blog_posts stander_blog';
    $loop_container_layout_classes = 'row';
  } elseif ($etdukandari_etcodes_blog_style == 'cards_blog') {
    $loop_container_classes = 'blog_posts stander_blog mb_10 stander_blog_card';
    $loop_container_layout_classes = 'row masonry_layout';

  }
 
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">

  <div class="<?php echo esc_attr($loop_container_classes); ?>" id="loop-content">

    <div class="<?php echo esc_attr($loop_container_layout_classes); ?>">

    <?php if ($etdukandari_etcodes_blog_style == 'cards_blog') : ?> <div class="grid-sizer col-lg-4 col-md-6"></div> <?php endif; ?>

    <?php if ( have_posts() ) : ?>
    
      <?php
      // Start the loop.
      while ( have_posts() ) : the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
         
        ?>
        <div class="<?php echo esc_attr($columns_classes); ?>">
        
        <?php
          if($etdukandari_etcodes_blog_style == 'stander_blog') {
            get_template_part( 'template-parts/post/content', get_post_format() );
          } elseif ($etdukandari_etcodes_blog_style == 'cards_blog') {
            get_template_part( 'template-parts/post/content-cards', get_post_format() );
          } else {
            get_template_part( 'template-parts/post/content-masonry', get_post_format() );
          }
        ?>
        </div>
        <?php
      // End the loop.
      endwhile;
    ?> 
    <?php 
    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'template-parts/content', 'none' );
    endif;
    ?>

    </div>
  </div>
    <?php 
        the_posts_pagination( array(
          'mid_size' => 2,
          'prev_text' => esc_html__( 'Prev', 'dukandari' ),
          'next_text' => esc_html__( 'Next', 'dukandari' ),
        ) );
    ?>

  </main>
</div>

<?php 
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