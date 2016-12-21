<footer>

	<div class="content">
		<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>

			<nav id="site-navigation" class="main-navigation" role="navigation"
			     aria-label="<?php esc_attr_e( 'Footer Menu', 'twentysixteen' ); ?>">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer-menu',
				) );
				?>
			</nav>

		<?php endif; ?>

		<div class="address">
			<p>L'INSTANT GATEAU<br/>
				<a target="_blank" href="https://goo.gl/maps/6DqPRSrs5fS2">Rue du Centre 14, 1009 Pully CH</a></p>
		</div>

		<div class="contact">
			<p>+41 21 711 23 90</p>
			<p><a href="mailto:info@linstantgateau.ch">info@linstantgateau.ch</a></p>
		</div>

	</div>

</footer>

<?php wp_footer(); ?>


</body>
</html>
