		</main>

		<footer class="site-footer">
			<div class="wrap">
				<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
					<div class="site-footer-widgets">
						<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
							<div class="site-footer-column"><?php dynamic_sidebar( 'footer-1' ); ?></div>
						<?php endif; ?>

						<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
							<div class="site-footer-column"><?php dynamic_sidebar( 'footer-2' ); ?></div>
						<?php endif; ?>

						<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
							<div class="site-footer-column"><?php dynamic_sidebar( 'footer-3' ); ?></div>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<div class="site-footer-meta">
					<p>
						<?php printf( esc_html__( '&copy; %1$d %2$s', 'phresh' ), date_i18n( 'Y' ), '<a href="' . home_url( '/' ) . '">' . get_bloginfo( 'name' ) . '</a>' ); ?>
						<span class="sep"></span>
						<a href="https://themebright.com/"><?php esc_html_e( 'Theme designed by ThemeBright', 'phresh' ); ?></a>
					</p>

					<?php phresh_social_menu(); ?>
				</div>
			</div>
		</footer>
	</div>

	<?php wp_footer(); ?>
</body>
</html>
