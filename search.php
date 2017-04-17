<?php

get_header();

// Make available for displaying # of found posts
global $wp_query;

?>

<div class="wrap wrap-narrow">
	<header class="archive-header">
		<h2 class="archive-title"><?php printf( esc_html__( 'Search: &ldquo;%s&rdquo;', 'phresh' ), get_search_query() ); ?></h2>
		<p class="archive-description"><?php printf( esc_html__( '%d results found.', 'phresh' ), $wp_query->found_posts ); ?></p>
	</header>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
		<?php endwhile; ?>

		<?php phresh_posts_pagination(); ?>
	<?php else : ?>
		<p class="nothing-found"><?php esc_html_e( 'Sorry, nothing found.', 'phresh' ); ?></p>
	<?php endif; ?>
</div>

<?php

get_footer();
