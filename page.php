<?php
	/**
	 * Page
	 *
	 * Theme Page
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
<main id="main" class="content-container page-main">
	<?php
		while ( have_posts() ) :
			the_post();
	?>
	<div class="page-main__heading">
		<h1 class="page-main__title primary-heading">
			<?php the_title(); ?>
		</h1>
	</div>
	<div class="page-main__content paragraph paragraph--post">	
		<?php the_content(); ?>
	</div>
	<?php
		endwhile;
		get_sidebar();
	?>
</main><!-- #main -->
<?php get_footer(); ?>