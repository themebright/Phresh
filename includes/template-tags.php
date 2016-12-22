<?php
/**
 * Template Tags
 */

/**
 * Icon
 *
 * @param  string $icon          Icon to display.
 * @param  array  $extra_classes Array of additional classes to add to the icon markup.
 * @return string                Class markup.
 */
function phresh_icon( $icon = 'wordpress', $extra_classes = [] ) {

	$classes = array( 'dashicons', "dashicons-$icon" );

	if ( $extra_classes ) {
		$classes = array_merge( $classes, $extra_classes );
	}

	return '<span class="' . join( ' ', $classes ) . '"></span>';

}

/**
 * Post Meta Above
 *
 * Displays all top post meta.
 */
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

/**
 * Post Meta Below
 *
 * Displays all bottom post meta.
 */
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

/**
 * Posts Nav
 *
 * Displays next and prev posts links (with title).
 */
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

/**
 * Pagination Arrows
 *
 * @return string `prev_text` and `next_text` attributes to add arrows to pagination functions
 */
function phresh_pagination_arrow_attr() {

	return array(
		'prev_text' => phresh_icon( 'arrow-left-alt' ) . phresh_srt( esc_html__( 'Previous', 'phresh' ) ),
		'next_text' => phresh_srt( esc_html__( 'Next', 'phresh' ) ) . phresh_icon( 'arrow-right-alt' ),
	);

}

/**
 * Comments Pagination
 *
 * Display comments pagination links.
 */
function phresh_comments_pagination() {

	paginate_comments_links( phresh_pagination_arrow_attr() );

}

/**
 * Posts Pagination
 *
 * Display posts pagination links.
 */
function phresh_posts_pagination() {

	the_posts_pagination( phresh_pagination_arrow_attr() );

}

/**
 * Screen Reader Text
 *
 * @param  string $text Text to wrap in screen reader class.
 * @return string       Text wrapped in screen reader class.
 */
function phresh_srt( $text = '' ) {

	return "<span class='screen-reader-text'>$text</span>";

}

/**
 * Link Pages
 *
 * @param  string $content Post content.
 * @return string          Post content with link pages markup appended.
 */
function phresh_link_pages( $content ) {

	return $content . wp_link_pages( array( 'echo' => false ) );

}
add_filter( 'the_content', 'phresh_link_pages' );
