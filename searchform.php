<form action="<?php echo esc_attr( home_url( '/' ) ); ?>" method="get" class="search-form" role="search">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'phresh' ) ?></span>
		<input type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'phresh' ); ?>">
	</label>

	<button type="submit">
		<span class="dashicons dashicons-arrow-right-alt"></span>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'phresh' ); ?></span>
	</button>
</form>
