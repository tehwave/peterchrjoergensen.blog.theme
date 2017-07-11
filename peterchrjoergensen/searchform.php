<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 */
?>
<form role="search" method="get" class="search-form u-cf" action="<?php echo home_url( '/' ); ?>">
	<label for="search"><?php echo _x( '', 'label' ) ?></label>
	<input type="search" class="u-full-width search-field"
            placeholder="<?php echo esc_attr_x( 'Find posts by title, date, categories...', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
    <input type="submit" class="search-submit u-full-width button-primary u-pull-right"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"/>
</form>