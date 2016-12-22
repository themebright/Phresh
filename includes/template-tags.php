<?php

function phresh_icon( $icon = 'wordpress', $class = null ) {

	$classes = array( 'dashicons', "dashicons-$icon" );

	if ( $class ) {
		$classes[] = $class;
	}

	return '<span class="' . implode( ' ', $classes ) . '"></span>';

}

function phresh_post_meta_above() {

	?>

	<div class="entry-meta">
		<a href="<?php echo esc_url( get_the_permalink() ); ?>">
			<time datetime="<?php the_time( 'c' ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
		</a>

		<span class="sep"></span>
		<?php the_author_posts_link(); ?>

		<?php if ( comments_open() || have_comments() ) : ?>
			<span class="sep"></span>
			<a href="<?php echo esc_url( comments_link() ); ?>"><?php comments_number(); ?></a>
		<?php endif; ?>
	</div>

	<?php

}

function phresh_post_meta_below() {

	?>

	<?php if ( has_category() ) : ?>
		<?php printf( esc_html__( 'Filed under %s', 'phresh' ), get_the_category_list( ', ' ) ); ?>
		<?php get_the_category_list( $separator = '', $parents = '', $post_id = false ) ?>
	<?php endif; ?>

	<?php if ( has_category() && has_tag() ) : ?>
		<span class="sep"></span>
	<?php endif; ?>

	<?php if ( has_tag() ) : ?>
		<?php echo get_the_tag_list( esc_html__( 'Tagged ', 'phresh' ), ', ' ); ?>
	<?php endif; ?>

	<?php

}

function phresh_posts_nav() {

	?>

	<div class="posts-nav">
		<div class="posts-nav-prev">
			<?php previous_post_link( '%link', phresh_icon( 'arrow-left-alt' ) . ' %title' ); ?>
		</div>

		<div class="posts-nav-next">
			<?php next_post_link( '%link', '%title ' . phresh_icon( 'arrow-right-alt' ) ); ?>
		</div>
	</div>

	<?php

}

function phresh_pagination_arrow_attr() {

	return array(
		'prev_text' => phresh_icon( 'arrow-left-alt' ) . phresh_srt( esc_html__( 'Previous', 'phresh' ) ),
		'next_text' => phresh_srt( esc_html__( 'Next', 'phresh' ) ) . phresh_icon( 'arrow-right-alt' ),
	);

}

function phresh_comments_pagination() {

	paginate_comments_links( phresh_pagination_arrow_attr() );

}

function phresh_posts_pagination() {

	the_posts_pagination( phresh_pagination_arrow_attr() );

}

function phresh_srt( $text = '' ) {

	return "<span class='screen-reader-text'>$text</span>";

}
