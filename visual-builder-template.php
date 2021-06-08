<?php
/**
 * Template Name: Visual Builder Template
 */

get_header();

if (function_exists('fw_get_db_settings_option')) {

    $post_layout_settings = fw_get_db_post_option(get_the_ID(), 'post_layout_settings', '');
    $page_width           = isset($post_layout_settings['page_width']) ? $post_layout_settings['page_width'] : $page_width;
}

/**
 * etdukandari_etcodes_main_title hook.
 *
 */
do_action('etdukandari_etcodes_main_title');

if (have_posts()): while (have_posts()): the_post();

        $thumb       = get_post_thumbnail_id();
        $img_url     = wp_get_attachment_url($thumb, 'full'); //get full URL to image (use "large" or "medium" if the images too big)
        $image       = aq_resize(wp_get_attachment_url(get_post_thumbnail_id()), 848, 600, true, true, true); //
        $image_title = get_the_title(get_post_thumbnail_id());
        ?>
        <div id="post-<?php the_ID();?>" <?php post_class();?>>
                <?php if ($image): ?>
                        <div class="post-img">
                                <img src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($image_title) ?>">
                        </div>
                <?php endif;?>
                <div class="post-content">
                        <?php the_content();?>
                </div>
        </div>

<?php endwhile;else: ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'dukandari');?></p>
<?php endif;?>

<?php get_footer();?>