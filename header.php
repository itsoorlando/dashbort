<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php 
    	global $et_etdukandari_options;   
  		if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ) { 
            if ($et_etdukandari_options['favicon']['url'] ) { ?>
			        <link rel="shortcut icon" type="image/png" href="<?php echo esc_url( $et_etdukandari_options['favicon']['url'] ); ?>" />
      <?php } 
      }
      ?>
    <?php wp_head(); ?> 
  </head>
  <body <?php body_class(); ?>>

    <?php
    /**
     * etdukandari_etcodes_after_body_tag_start hook
     *
     */
    do_action('etdukandari_etcodes_after_body_tag_start'); ?>

      <!--  Header -->
      <?php
       /**
         * etdukandari_etcodes_header_area hook.
         *
         */
        do_action( 'etdukandari_etcodes_header_area' );
      ?>
      <!-- End Header -->
      