<?php
/**
 * Customizer
 */

/**
 * Register Customizer settings.
 */
function phresh_customizer_register( $wp_customize ) {

	// Accent color setting
	$wp_customize->add_setting( 'color_accent', array(
		'default' => '#69c5e4',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Accent color control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_accent', array(
		'label' => __( 'Accent color', 'phresh' ),
		'section' => 'colors'
	) ) );

}
add_action( 'customize_register', 'phresh_customizer_register' );

/**
 * Build necessary styles to implement customizer options.
 */
function phresh_customizer_styles() {

	?>

	<style id="phresh-custom-css">
		<?php if ( get_theme_mod( 'color_accent' ) ) : $color = esc_html( get_theme_mod( 'color_accent' ) ); ?>
			a,
			blockquote,
			.entry.sticky .entry-title:before {
				color: <?php echo $color; ?>;
			}

			textarea:focus,
			input[type=email]:focus,
			input[type=number]:focus,
			input[type=password]:focus,
			input[type=search]:focus,
			input[type=tel]:focus,
			input[type=text]:focus,
			input[type=url]:focus {
				border-color: <?php echo $color; ?>;
			}

			.button,
			button,
			input[type=button],
			input[type=submit] {
				background: <?php echo $color; ?>;
			}
		<?php endif; ?>
	</style>

	<?php

}
add_action( 'wp_head', 'phresh_customizer_styles' );
