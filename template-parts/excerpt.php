<article <?php post_class( 'entry entry-excerpt' ); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_the_permalink() ) . '">', '</a></h1>' ); ?>
		<?php phresh_post_meta_above(); ?>
	</header>

	<div class="entry-main">
		<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'entry-thumb' ) ); ?>
		<?php the_excerpt(); ?>
		<p><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php esc_html_e( 'Read More', 'phresh' ); ?></a></p>
	</div>

	<footer class="entry-footer">
		<?php phresh_post_meta_below(); ?>
	</footer>
</article>
