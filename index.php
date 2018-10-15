<?php
	/**
	 * Index
	 *
	 * Theme index.
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
		'post_type' => 'post',
		'post_per_page' => 8,
		'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 )
	);
	$query = new WP_Query($args); 
?>
<main id="main" class="index-main content-container">
	<?php get_template_part('slider') ?>
	<div class="index-main__grid">
		<?php
			while ( $query->have_posts() ) : $query->the_post();
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
