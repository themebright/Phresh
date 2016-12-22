<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if ( is_singular() && has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'large', array( 'class' => 'site-header-image' ) ); ?>
	<?php else : ?>
		<?php the_header_image_tag( array( 'class' => 'site-header-image' ) ); ?>
	<?php endif; ?>

	<div class="site-wrap">
		<header class="site-header site-header-sticky">
			<div class="wrap">
				<?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<div class="site-branding">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
						<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
					</div>
				<?php endif; ?>

				<nav class="site-nav">
					<button class="site-nav-toggle">
						<?php echo phresh_srt( esc_html__( 'Toggle Menu', 'phresh' ) ) . phresh_icon( 'menu' ) . phresh_icon( 'no' ); ?>
					</button>

					<?php wp_nav_menu( array(
						'theme_location' => 'main',
						'container_class' => 'menu',
					) ); ?>
				</nav>
			</div>
		</header>

		<main class="site-main">
