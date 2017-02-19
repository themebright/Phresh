		</main>

		<footer class="site-footer">
			<div class="wrap">
				<?php phresh_social_menu(); ?>
				<?php printf( esc_html__( '&copy; %1$d %2$s', 'phresh' ), date_i18n( 'Y' ), '<a href="' . home_url( '/' ) . '">' . get_bloginfo( 'name' ) . '</a>' ); ?>
				<span class="sep"></span>
				<a href="https://themebright.com/"><?php esc_html_e( 'Theme designed by ThemeBright', 'phresh' ); ?></a>
			</div>
		</footer>
	</div>

	<?php wp_footer(); ?>
</body>
</html>
