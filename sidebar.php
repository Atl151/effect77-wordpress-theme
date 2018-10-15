<?php
	/**
	 * Sidebar
	 *
	 * Theme Sidebar
	 *
	 * @since   0.1.0
	 * @package effect77
	 */

	// Exit if accessed directly.
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	if ( ! is_active_sidebar( 'main-sidebar' ) ) {
		return;
	}
?>

<aside class="main-sidebar">
	<?php dynamic_sidebar( 'main-sidebar' ); ?>
</aside>
