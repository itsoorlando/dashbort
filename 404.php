<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Dukandari
 * @since Dukandari 1.0
 */

get_header(); ?>

<div class="hero_title_container d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1><?php esc_html_e( '404 error page', 'dukandari' ); ?></h1> 
      </div>
    </div>
  </div>
</div>
<div class="container mt_60 mb_60">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="erroe-title">
          <?php esc_html_e( 'OUCH! 404', 'dukandari' ); ?>
        </h1>
        <p class="error-des"><?php esc_html_e( 'Sorry the page you are looking for does not exist.', 'dukandari' ); ?></p>

      </div>      
    </div>
</div>
<?php get_footer(); ?>