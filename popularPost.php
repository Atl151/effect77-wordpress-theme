<?php 
    $postTags = get_the_tags();
    $arrayTags = array();
    if ($postTags) {
        foreach( $postTags as $tag ) {
            array_push($arrayTags, $tag->name);
        }
    }
    $args = array(
		'post_type' => 'post',
        'post_per_page' => 3,
        'tag' => implode('+', $arrayTags)
	);
    $query = new WP_Query($args);
    while ( $query->have_posts() ) : $query->the_post();
?>
<div class="popular-post">	
    <h3 class="popular-post-heading popular-post__title">
        <a href="<?php the_permalink() ?>" rel="bookmark" class="popular-post__link">
            <?php the_title(); ?>
        </a>
    </h3>
    <div class="popular-post__img-box">
    <a href="<?php the_permalink() ?>">
		<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'popular-post__img' ) ); ?>
	</a>
    </div>
    <div class="popular-post__info paragraph-info">
        <p class="paragraph-info">
            <?php the_author_posts_link() ?>,
        </p>
    </div>
    <div class="gridpost__content paragraph-grid">
        <?php the_excerpt() ?>
    </div>
</div>
<?php endwhile; ?>