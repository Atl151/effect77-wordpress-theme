<?php
	/**
	 * Searchform
	 *
	 * Theme searchform
	 *
	 * @since   0.1.0
	 * @package effect77
	 */

	// Exit if accessed directly.
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="searchform paragraph-info">
		<input type="text" class="searchform__input" name="s" id="s" placeholder="<?php esc_attr_e( 'Buscar', 'e77' ); ?>" />
		<button type="submit" class="searchform__submit" name="submit" id="searchsubmit">
			<svg class="searchform__icon">
				<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/symbol-defs.svg#icon-magnifying-glass"></use>
			</svg>
		</button>
</form>