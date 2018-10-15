<?php
	/**
	 * Single Page
	 *
	 * Theme Single Page
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
<main id="main" class="content-container post-main">
	<?php
		while ( have_posts() ) :
			the_post();
	?>
	<div class="post-main__image-box">
		<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'post-main__image' ) ); ?>
	</div>
	<div class="post-main__heading">
		<h1 class="post-main__title primary-heading ">
			<?php the_title(); ?>
		</h1>
		<div class="post-main__info paragraph-info">
			<p>Escrito por <?php the_author_posts_link() ?> | <?php the_time('F j, Y') ?> </p>
		</div>
	</div>				
	<div class="post-main__content  paragraph paragraph--post">	
		<?php the_content(); ?>
	</div>
	<div class="post-main__meta">
		<h3 class="tertiary-heading">Etiquetas:</h3>
		<?php 
			the_tags('<ul class="paragraph-info"><li>', '</li><li>', '</li></ul>'); 
		?>
	</div>
	<div class="post-main__comments">
		<?php	
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile;
		?>
	</div>
	<?php
	get_sidebar();
	?>
</main>	
<?php get_footer(); ?>