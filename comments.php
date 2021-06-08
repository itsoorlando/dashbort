<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Dukandari
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>

		<h2 class="comments-title">
			<?php
			printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'dukandari' ),
				number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-above" class="navigation comment-navigation">
				<h1 class="screen-reader-text"><?php esc_html__('Comment navigation', 'dukandari' ); ?></h1>

				<div
					class="nav-previous"><?php previous_comments_link( esc_html__('&larr; Older Comments', 'dukandari' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__('Newer Comments &rarr;', 'dukandari' ) ); ?></div>
			</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
			wp_list_comments('callback=etdukandari_etcodes_comments');
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-below" class="navigation comment-navigation">
				<h1 class="screen-reader-text"><?php esc_html__('Comment navigation', 'dukandari' ); ?></h1>

				<div
					class="nav-previous"><?php previous_comments_link( esc_html__('&larr; Older Comments', 'dukandari' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__('Newer Comments &rarr;', 'dukandari' ) ); ?></div>
			</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html__('Comments are closed.', 'dukandari' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->