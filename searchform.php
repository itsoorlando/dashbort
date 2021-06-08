<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<form role="search" class="form-fields-bg-alabaster" action="<?php echo esc_url( home_url('/') ); ?>">
	<div class="input-group">
		<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'dukandari' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
		<div class="input-group-btn">
			<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
		</div>
	</div>
</form>