<?php
	/**
	 * 404 Page
	 *
	 * Theme 404 Page
	 *
	 * @since   0.1.0
	 * @package effect77
	 */

	// Exit if accessed directly.
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
	get_header();
?>
<main id="main" class="main-404 content-container">
	<div class="main-404__heading">
		<h1 class="main-404__title primary-heading">
			Error 404 - Parece que aquí no hay nada.
		</h1>
	</div>
	<div class="main-404__content ">
		<p class="paragraph-post">Por qué no intentas hacer una busqueda o quizá alguno de nuestros artículos recientes te interese.</p>
		<?php 
			get_search_form()
		?>
	</div>
	<?php get_sidebar(); ?>
</main><!-- #main -->
<?php
get_sidebar();
get_footer();
?>