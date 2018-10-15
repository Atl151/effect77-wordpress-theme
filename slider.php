<?php
    /**
     * Theme slider
     *
     * Slider
     *
     * @since   0.1.0
     * @package effect77
     */

    // Exit if accessed directly.
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }
    $args = array(
		'post_type' => 'post',
		'meta_query' => array(
            array(
                'key' => 'e77_slider_meta',
                'value' => 'true'
            )
        )
	);
	$query = new WP_Query($args); 
?>

<aside class="slider">
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <figure class="slider__article">
        <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'slider__image' ) ); ?>
        </a>
        
        <figcaption class="slider__caption">
            <h2 class="slider__title secondary-heading">
                <a href="<?php the_permalink() ?>" rel="bookmark" class="gridpost__link">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p class="slider__info">
                <span class="slider__category"><?php the_category('&');?></span>
                <span class="slider__author"><?php the_author_posts_link() ?></span> |
                <span class="slider__time"><?php the_time('F j, Y') ?></span>    
            </p>
        </figcaption>
    </figure>
    <?php endwhile; ?>
</aside>