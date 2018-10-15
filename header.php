<?php
	/**
	 * Theme Header
	 *
	 * Header data.
	 *
	 * @since   0.1.0
	 * @package effec77
	 */

	// Exit if accessed directly.
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="fb:pages" content="1500233590286264" />
	<?php wp_head(); ?>
</head>
<body <?php body_class('main-container'); ?>>
	<header class="header">
		<div class="header__logo-box">
			<?php the_custom_logo(); ?>
		</div>
		<nav class="header__navbar">
			<?php 
				$argsmenu = array(
					'menu' => 'main-menu',
					'theme_location' => 'main-menu',
					'menu_class' => 'nav-bar__main-menu',
					'menu_id' => 'main-menu',
					'container' => 'div',
					'container_class' => 'nav-bar__main-menu-box'
				);
				wp_nav_menu( $argsmenu );
			?>
		</nav>
		<nav class="header__navbar2 navbar2">
			<!-- <div class="navbar2__icon-box">
				<svg class="navbar2__icon">
					<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/symbol-defs.svg#icon-user"></use>
				</svg>
			</div> -->
		<?php 	
				
				$argsmenu = array(
					'menu' => 'user-menu',
					'theme_location' => 'user-menu',
					'menu_class' => 'user-menu',
					'menu_id' => 'user-menu',
					'container' => 'div',
					'container_class' => 'user-menu-box'
				);
				wp_nav_menu( $argsmenu );
			?>
		</nav>
		<nav class="header__mobile">
			<?php 
				$argsmenu = array(
					'menu' => 'main-menu',
					'theme_location' => 'main-menu',
					'menu_class' => 'mobile__menu',
					'menu_id' => 'mobile-menu',
					'container' => 'div',
					'container_class' => 'mobile__menu-box'
				);
				wp_nav_menu( $argsmenu );
			?>
			<div id="mobile-button" class="mobile__button">
				<svg class="mobile__icon">
					<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/symbol-defs.svg#icon-dots-three-horizontal"></use>
				</svg>
			</div>
		</nav>
	</header>
	
