<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 */
?>
<form role="search" method="GET" action="<?php echo home_url('/'); ?>">
    <div class="input-group">
        <input
            type="search"
            class="form-control"
            placeholder="<?php echo esc_attr_x('Find posts by title, date, categories...', 'placeholder') ?>"
            aria-label="<?php echo esc_attr_x('Find posts by title, date, categories...', 'placeholder') ?>"
            value="<?php echo get_search_query() ?>"
            name="s"
            title="<?php echo esc_attr_x('Search for:', 'label') ?>"
        />
        <span class="input-group-btn">
            <input
                type="submit"
                class="btn btn-primary"
                value="<?php echo esc_attr_x('Search', 'submit button') ?>"
            />
        </span>
    </div>
</form>




