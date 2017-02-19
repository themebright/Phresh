<?php

get_header();

?>

<div class="wrap wrap-narrow">
	<article class="entry entry-content">
		<header class="entry-header">
			<h1 class="entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'phresh' ); ?></h1>
		</header>

		<div class="entry-main">
			<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'phresh' ); ?>
			<p><?php get_search_form(); ?></p>
		</div>
	</article>
</div>

<?php

get_footer();
