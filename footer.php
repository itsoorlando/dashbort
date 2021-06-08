  <footer class="web-footer">
  <?php
    /**
     * etdukandari_etcodes_footer_start hook.
     *
     */
    do_action( 'etdukandari_etcodes_footer_start' );

    /**
     * etdukandari_etcodes_footer_ends hook.
     *
    */
    do_action( 'etdukandari_etcodes_footer_ends' );
  ?>
  </footer>
<?php
  /**
  * etdukandari_etcodes_before_body_tag_end hook
  *
  */
  do_action('etdukandari_etcodes_before_body_tag_end'); ?>

<?php wp_footer(); ?>
</body>
</html>