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
			<p><strong>L'INSTANT GATEAU</strong><br/>
				<a target="_blank" href="https://goo.gl/maps/6DqPRSrs5fS2">Rue du Centre 14, 1009 Pully CH</a></p>
		</div>

		<div class="contact">
			<p>+41 21 711 23 90</p>
			<p><a href="mailto:info@linstantgateau.com">info@linstantgateau.com</a></p>
		</div>
		
		<div class="social">
			<a target="_blank" href="https://www.facebook.com/Linstant-Gâteau-Fanny-Beausire-1768149016769186/?fref=ts" class="fb"></a>
			<a target="_blank" href="https://www.instagram.com/linstantgateau/" class="insta"></a>
		</div>

	</div>

</footer>

<?php wp_footer(); ?>


</body>
</html>
