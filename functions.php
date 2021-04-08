<?php
/**
 * My Shop Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package My_Shop_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function version_id() {
  if ( WP_DEBUG )
    return time();
  return _S_VERSION;
}

if ( ! function_exists( 'my_shop_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function my_shop_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on My Shop Theme, use a find and replace
		 * to change 'my-shop-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'my-shop-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'my-shop-theme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'my_shop_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'my_shop_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function my_shop_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'my_shop_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'my_shop_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function my_shop_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'my-shop-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'my-shop-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'my_shop_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function my_shop_theme_scripts() {
	wp_enqueue_script( 'font-awesome-free', 'https://kit.fontawesome.com/a330ae9e9c.js', array(), version_id(), true );

	wp_enqueue_style( 'my-shop-theme-style', get_stylesheet_uri(), array(), version_id() );
	wp_style_add_data( 'my-shop-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'my-shop-theme-main', get_template_directory_uri() . '/js/main.js', array(), version_id(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'my_shop_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';

	add_filter( 'woocommerce_show_page_title', '__return_false' );
}

function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

/**
 * Change price display on product card
 */
add_filter( 'woocommerce_variable_price_html', 'custom_min_max_variable_price_html', 10, 2 );
function custom_min_max_variable_price_html( $price, $product ) {
    $prices = $product->get_variation_prices( true );
    $min_price = current( $prices['price'] );

    $min_price_html = wc_price( $min_price ) . $product->get_price_suffix();
    $price = sprintf( __( 'Od %1$s', 'woocommerce' ), $min_price_html );

    return $price;
}

// Change Flexslider to use dots instead of thumbnails
add_filter( 'woocommerce_single_product_carousel_options', 'ud_update_woo_flexslider_options' );

function ud_update_woo_flexslider_options( $options ) {

    $options['controlNav'] = true;
    return $options;
}

// Remove woocommerce breadcrumbs
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

// Remove product additional information
add_filter( 'woocommerce_product_tabs', 'bbloomer_remove_product_tabs', 9999 );
  
function bbloomer_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] ); 
    return $tabs;
}

// Change voucher text

add_filter( 'gettext', 'woocommerce_rename_coupon_field_on_cart', 10, 3 );
add_filter( 'gettext', 'woocommerce_rename_coupon_field_on_cart', 10, 3 );
// add_filter('woocommerce_coupon_error', 'rename_coupon_label', 10, 3);
// add_filter('woocommerce_coupon_message', 'rename_coupon_label', 10, 3);
// add_filter('woocommerce_cart_totals_coupon_label', 'rename_coupon_label',10, 1);
// add_filter( 'woocommerce_checkout_coupon_message', 'woocommerce_rename_coupon_message_on_checkout' );


function woocommerce_rename_coupon_field_on_cart( $translated_text, $text, $text_domain ) {
	// bail if not modifying frontend woocommerce text
	// if ( is_admin() || 'woocommerce' !== $text_domain ) {
	// 	return $translated_text;
	// }
	// if ( 'Coupon:' === $text ) {
	// 	$translated_text = 'Offer Code:';
	// }

	// if ('Coupon has been removed.' === $text){
	// 	$translated_text = 'Offer code has been removed.';
	// }

	if ( 'Apply coupon' === $text ) {
		$translated_text = '';
	}

	if ( 'Coupon code' === $text ) {
		$translated_text = 'Wpisz kod kuponu';
	} 

	return $translated_text;
}

add_filter('woocommerce_sale_flash', 'ds_change_sale_text');

function ds_change_sale_text() {
return '<span class="onsale"><i class="fas fa-percentage"></i></span>';
}

// Remove the result count from WooCommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );

/*
 * Change number of related products output
 */ 
function woo_related_products_limit() {
	global $product;
	  
	  $args['posts_per_page'] = 6;
	  return $args;
  }
  add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
	function jk_related_products_args( $args ) {
	  $args['posts_per_page'] = 4; // 4 related products
	  $args['columns'] = 2; // arranged in 2 columns
	  return $args;
  }