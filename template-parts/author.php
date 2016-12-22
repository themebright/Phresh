<div class="author-box">
	<?php echo get_avatar( get_the_author_meta( 'email' ), 80 ); ?>
	<h2 class="author-title"><?php the_author(); ?></h2>

	<?php if ( get_the_author_meta( 'description' ) ) : ?>
		<div class="author-bio">
			<?php echo wpautop( wptexturize( get_the_author_meta( 'description' ) ) ); ?>
		</div>
	<?php endif; ?>

	<?php if ( get_the_author_meta( 'url' ) ) : ?>
		<p class="author-url">
			<?php printf( '<a href="%1$s" target="_blank">' . phresh_icon( 'admin-links' ) . '%2$s</a>', esc_url( get_the_author_meta( 'url' ) ), esc_html__( 'Website', 'phresh' ) ); ?>
		</p>
	<?php endif; ?>
</div>
