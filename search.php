<?php get_header();?>
<div class="hero_title_container d-flex align-items-center height_15">
  <div class="container">
    <div class="row">
      <div class="col-md-12 hero_title_small">
        <h1><?php esc_html_e('Search Results for: ', 'dukandari'); echo esc_attr(get_search_query());?></h1>
      </div>
    </div>
  </div>
</div>

<div class="page-content container">

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    
    <div class="row">
      <div class="col-12">
      
      
      <form action="<?php echo esc_url(home_url('/')); ?>" class="etcodes-search-page-form" method="get">
        <div class="etcodes-form-holder">
          <div class="etcodes-column-left">
            <input type="text" name="s" class="etcodes-search-field" autocomplete="off" value="" placeholder="<?php esc_html_e('Type here', 'dukandari'); ?>"/>
          </div>
          <div class="etcodes-column-right">
            <button type="submit" class="etcodes-search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </div>
      </form>

      </div>
    </div>
    <div id="loop-content">
        <?php if (have_posts()): ?>

        <?php while (have_posts()): the_post(); ?>

        <div class="row etcodes-search-item align-items-center">

        <?php if (has_post_thumbnail()): ?>

          <div class="col-2">
            <?php the_post_thumbnail( array(150, 150) ); ?>
          </div>
          <div class="col-10 etcodes-search-item-text">
            <?php if (get_the_title() != '') : ?>
              <h4 class="card-title"><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php else : ?>
              <h4 class="card-title"><a  href="<?php the_permalink(); ?>"><?php esc_html_e('Permalink to the post', 'dukandari'); ?></a></h4>
            <?php endif; ?>

            <?php
              $etdukandari_etcodes_excerpt = get_the_excerpt();
              if ($etdukandari_etcodes_excerpt != '') { ?>
                <p itemprop="description" class="etcodes-post-excerpt"><?php echo esc_html($etdukandari_etcodes_excerpt); ?></p>
            <?php } ?>
          </div>

        <?php else: ?>

          <div class="col-md-12 etcodes-search-item-text">
            <?php if (get_the_title() != '') : ?>
              <h4 class="card-title"><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php else : ?>
              <h4 class="card-title"><a  href="<?php the_permalink(); ?>"><?php esc_html_e('Permalink to the post', 'dukandari'); ?></a></h4>
            <?php endif; ?>
            <?php
              $etdukandari_etcodes_excerpt = get_the_excerpt();
              if ($etdukandari_etcodes_excerpt != '') { ?>
                <p itemprop="description" class="etcodes-post-excerpt"><?php echo esc_html($etdukandari_etcodes_excerpt); ?></p>
            <?php } ?>
          </div>

        <?php endif; ?>
          
        </div>

        <?php endwhile; ?>
        <?php
        // If no content, include the "No posts found" template.
        else: ?>

        <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dukandari');?></p>
          
        <?php endif; ?>

      </div>
      <div class="mt-5">
        <?php the_posts_pagination(array(
          'mid_size'  => 2,
          'prev_text' => esc_html__( 'Prev', 'dukandari' ),
          'next_text' => esc_html__( 'Next', 'dukandari' ),
          ));
          ?>
      </div>
  </main>
</div>

</div>
<?php get_footer();?>