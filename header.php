<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php // the_header_image_tag( array( 'class' => 'site-header-image' ) ); ?>

	<header class="site-header">
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
					'container' => false,
					'depth' => 3,
					'fallback_cb' => false,
				) ); ?>
			</nav>
		</div>
	</header>

	<main class="site-main">
