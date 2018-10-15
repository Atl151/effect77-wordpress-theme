<?php
	/**
	 * Footer
	 *
	 * @since   0.1.0
	 * @package effect77
	 */

	// Exit if accessed directly.
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
?>

<footer class="footer paragraph-footer">
	<div class="footer__sidebar footer__sidebar--1 " >
		<?php dynamic_sidebar('footer-1'); ?>
	</div>
	<div class="footer__sidebar footer__sidebar--2">
		<?php dynamic_sidebar('footer-2'); ?>
	</div>
	<div class="footer__socialnav">
		<p>
			Síguenos en nuestras redes sociales:
		</p>
		<div class="footer__icons-box">
			<a href="https://www.facebook.com/77Effect/" target="_blank">
				<svg class="footer__icon footer__icon--facebook">
					<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/symbol-defs.svg#icon-facebook"></use>
				</svg>
			</a>
			<a href="https://twitter.com/EffectTetris" target="_blank">
				<svg class="footer__icon footer__icon--twitter">
					<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/symbol-defs.svg#icon-twitter"></use>
				</svg>
			</a>
			<a href="#" target="_blank">
				<svg class="footer__icon footer__icon--youtube">
					<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/symbol-defs.svg#icon-youtube"></use>
				</svg>
			</a>	
		</div>
	</div>
	<div class="footer__copy">
		<p>
			Tema diseñado por <a href="#" target="_blank">Effect 77.</a>
			<br />
			Optimización del sitio y por W3 EDGE
		</p>
		<p>
			Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Licencia Creative Commons Atribución-CompartirIgual 4.0 Internacional</a>.
			<span class="footer__license">
				<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>
			</span>
		</p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
