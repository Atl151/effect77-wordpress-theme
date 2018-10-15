<?php
	/**
	 * Search Page
	 *
	 * Theme Search Page
	 *
	 * @since   0.1.0
	 * @package effect77
	 */

	// Exit if accessed directly.
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
	get_header();
	$args = array(
		'post_per_page' => 8,
		'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 )
	);
	$query = new WP_Query($args); 
?>
<main id="main" class="content-container archive-main">
	<div class="archive-main__heading">
		<h1 class="archive-main__title primary-heading">
			<?php printf( esc_html__( 'Resultados de la busqueda: %s', 'effec77' ), '<span>' . get_search_query() . '</span>' ); ?>
		</h1>
	</div>
	<div class="archive-main__grid">
		<?php
			while ( have_posts() ) : the_post();
				get_template_part('gridposts');
			endwhile;
		?>
		<div class="post-navigation">
			<?php posts_nav_link(); ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
</main><!-- #main -->
<?php get_footer(); ?>
