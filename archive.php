<?php
	/**
	 * Archive
	 *
	 * Theme Archive
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
<main id="main" class="archive-main content-container">
	<div class="archive-main__heading">
		<?php
			the_archive_title( '<h1 class="archive-main__title primary-heading">', '</h1>' );
			the_archive_description( '<div class="archive-main__description">', '</div>' );
		?>
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
