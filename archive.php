<?php

get_header();

?>

<div class="wrap wrap-narrow">
	<?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
	<?php the_archive_description( '<p class="archive-description">', '</p>' ); ?>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/excerpt', get_post_type() ); ?>
		<?php endwhile; ?>

		<?php phresh_posts_pagination(); ?>
	<?php else : ?>
		<p class="nothing-found"><?php esc_html_e( 'Sorry, nothing found.', 'phresh' ); ?></p>
	<?php endif; ?>
</div>

<?php

get_footer();
