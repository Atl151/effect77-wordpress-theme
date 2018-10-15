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
?>
<div class="gridpost">	
    <h3 class="grid-heading gridpost__title">
        <a href="<?php the_permalink() ?>" rel="bookmark" class="gridpost__link">
            <?php the_title(); ?>
        </a>
    </h3>
    <div class="gridpost__img-box">
    <a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'gridpost__img' ) ); ?>
					</a>
    </div>
    <div class="gridpost__category paragraph-info">
        <?php the_category('&');?>
    </div>
    <div class="gridpost__info">
        <p class="paragraph-info paragraph-info--grid">
            <?php the_author_posts_link() ?>,
            <span class="gridpost__time">
                <?php the_time('F j, Y') ?>
            </span>
        </p>
        </div>
    <div class="gridpost__content paragraph paragraph--grid ">
        <?php the_excerpt() ?>
    </div>
</div>
	