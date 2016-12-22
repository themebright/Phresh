<article <?php post_class( 'entry entry-content' ); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

	<div class="entry-main">
		<?php the_content(); ?>
	</div>
</article>
