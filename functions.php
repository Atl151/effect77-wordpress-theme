<?php
/**
 * Theme Functions
 *
 * Entire theme's function definitions.
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Scripts & Styles.
 *
 * Frontend with no conditions, Add Custom styles to wp_head.
 *
 * @since  1.0.0
 */

if ( ! function_exists( 'e77_setup' ) ) :
	function e77_setup() {
		load_theme_textdomain( 'e77', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'align-wide' );
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Primary', 'e77' ),
			'user-menu' => esc_html__( 'Secondary', 'e77')
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'custom-background', apply_filters( 'e77_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'e77_setup' );

function e77_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'e77_content_width', 640 );
}
add_action( 'after_setup_theme', 'e77_content_width', 0 );

function e77_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'e77' ),
		'id'            => 'main-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'e77' ),
		'before_widget' => '<section id="%1$s" class="sidebar__widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="sidebar__widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-footer-1', 'e77' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'e77' ),
		'before_widget' => '<section id="%1$s" class="footer__widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="footer__widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-footer-2', 'e77' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'e77' ),
		'before_widget' => '<section id="%1$s" class="footer__widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="footer__widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'e77_widgets_init' );

function e77_scripts() {
	if ( ! is_admin() ) {
		wp_enqueue_script( 'e77_vendorsJs', get_template_directory_uri() . '/assets/js/vendors.min.js' );
		wp_enqueue_script( 'e77_customJs', get_template_directory_uri() . '/assets/js/custom.min.js' );
		wp_enqueue_script( 'e77_sss', get_template_directory_uri() . '/assets/js/sss.js', array( 'jquery' ) );
		wp_enqueue_script( 'e77_slider', get_template_directory_uri() . '/assets/js/slider.js', array( 'jquery' ) );
		wp_enqueue_script( 'e77_moby', get_template_directory_uri() . '/assets/js/moby.js', array( 'jquery' ) );
		wp_enqueue_script( 'e77_mobile', get_template_directory_uri() . '/assets/js/mobileMenu.js', array( 'jquery' ) );
		wp_enqueue_style( 'e77_style', get_template_directory_uri() . '/style.min.css', array(), '1.0', 'all' );
	}
}
add_action( 'wp_enqueue_scripts', 'e77_scripts' );

// require get_template_directory() . '/inc/custom-header.php';
// require get_template_directory() . '/inc/template-tags.php';
// require get_template_directory() . '/inc/template-functions.php';
// require get_template_directory() . '/inc/customizer.php';

function e77_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'e77_custom_excerpt_length', 999 );
function e77_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'e77_excerpt_more' );

// add_filter('script_loader_src', 'agnostic_script_loader_src', 20,2);
// function agnostic_script_loader_src($src, $handle) {
//     return preg_replace('/^(http|https):/', '', $src);
// }

// add_filter('style_loader_src', 'agnostic_style_loader_src', 20,2);
// function agnostic_style_loader_src($src, $handle) {
//     return preg_replace('/^(http|https):/', '', $src);
// }

// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }

//Slider
function e77_save_slider_meta( $post_id, $post ) {

	/* Verify the nonce before proceeding. */
	// if ( !isset( $_POST['e77_slider_nonce'] ) || !wp_verify_nonce( $_POST['e77_slider_nonce'], basename( __FILE__ ) ) )
	//   return $post_id;
  
	/* Get the post type object. */
	$post_type = get_post_type_object( $post->post_type );
  
	/* Check if the current user has permission to edit the post. */
	if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
	  return $post_id;
  
	/* Get the posted data and sanitize it for use as an HTML class. */
	$new_meta_value = ( isset( $_POST['e77_mb_slider'] ) ? sanitize_html_class( $_POST['e77_mb_slider'] ) : ’ );
  
	/* Get the meta key. */
	$meta_key = 'e77_slider_meta';
  
	/* Get the meta value of the custom field key. */
	$meta_value = get_post_meta( $post_id, $meta_key, true );
	/* If a new meta value was added and there was no previous value, add it. */
	if ( $new_meta_value && ’ == $meta_value )
	  add_post_meta( $post_id, $meta_key, $new_meta_value, true );
  
	// /* If the new meta value does not match the old value, update it. */
	elseif ( $new_meta_value && $new_meta_value != $meta_value )
	  update_post_meta( $post_id, $meta_key, $new_meta_value );
  
	// /* If there is no new meta value but an old value exists, delete it. */
	elseif ( ’ == $new_meta_value && $meta_value )
	  delete_post_meta( $post_id, $meta_key, $meta_value );
  }
function e77_slider_metabox($post) { 
	wp_nonce_field( basename( __FILE__ ), 'e77_slider_nonce');
	?>
	<div class="metabox">
		<label for="e77_mb_slider" class="metabox__label">
			<?php _e("Add the post to the slider", "e77") ?>
		</label>
		<br />
		<!-- <select 
			type="text" 
			class="metabox__input"
		>
			<?php $mb_value =  get_post_meta( $post->ID, 'e77_slider_meta', true ) ?>
			<option value=""></option>
		</select> -->
		<input 
			type="checkbox" 
			class="metabox__input" 
			name="e77_mb_slider" 
			id="e77_mb_slider"
			value="true"
			size="30"
			<?php if(get_post_meta( $post->ID, 'e77_slider_meta', true )){
				echo 'checked';
			}  ?>
		>
	</div>
	<?php
}
function e77_add_meta_slider() {
	add_meta_box(
		'e77-add-slider',
		esc_html__('Show in slider', 'e77'),
		'e77_slider_metabox',
		'post',
		'side',
		'default'
	);
}
function e77_meta_slider_setup() {
	add_action('add_meta_boxes', 'e77_add_meta_slider');
	add_action( 'save_post', 'e77_save_slider_meta', 10, 2 );
}
add_action('load-post.php', 'e77_meta_slider_setup');


?>
