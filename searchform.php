<?php
/**
 * The template for displaying search form.
 *
 * @package Longriver
 */
?>
<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
	<div class="search-form__input-wrap">
		<span class="screen-reader-text"><?php esc_html_x( 'Search for:', 'label', 'longriver' ) ?></span>
		<label><?php echo esc_html__( 'Search:', 'longriver' ) ?></label>
		<input type="search" class="search-form__field"
			placeholder="<?php echo esc_attr_x( 'Enter keyword', 'placeholder', 'longriver' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label', 'longriver' ) ?>" />
	</div>
	<button type="submit" class="search-form__submit btn btn-primary"><i class="material-icons">search</i></button>
</form>
