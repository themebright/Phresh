<?php

get_header();

?>

<div class="wrap wrap-narrow">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
		<?php get_template_part( 'template-parts/author' ); ?>
		<?php phresh_posts_nav(); ?>
	<?php endwhile; else : ?>
		<p class="nothing-found"><?php esc_html_e( 'Sorry, nothing found.', 'phresh' ); ?></p>
	<?php endif; ?>

	<?php comments_template(); ?>
</div>

<?php

get_footer();
