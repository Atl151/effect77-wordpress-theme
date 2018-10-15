<?php
	/**
	 * Author Page
	 *
	 * Theme Author Page
	 *
	 * @since   0.1.0
	 * @package effect77
	 */

	// Exit if accessed directly.
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
	get_header();
	$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<main id="main" class="author-main content-container">
	<div class="author-main__heading">
		<h1 class="author-main__title primary-heading">
			<?php echo $curauth->first_name." ".$curauth->last_name; ?>
		</h1>
	</div>
	<div class="author-main__content ">
		<div class="author-main__profile paragraph-post">
			<div class="author-main__avatar">
				<?php echo get_avatar($curauth) ?>
			</div>
			<div class="author-main__description">
				<?php echo $curauth->user_description; ?>
			</div>
		</div>
		<h2 class="secondary-heading">Artículos</h2>
		<div class="author-main__articles">
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part('gridposts');
					endwhile; 
				else: 
			?>
				<p>Este autor no ha publicado ningun artículo</p>
			<?php endif; ?>
		</div>
		<div class="post-navigation">
			<?php posts_nav_link(); ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>