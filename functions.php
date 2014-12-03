<?php
/**
 * CloutierRemix2 functions and definitions
 *
 * @package CloutierRemix2
 */


if ( ! function_exists( 'cloutierremix2_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cloutierremix2_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on CloutierRemix2, use a find and replace
	 * to change 'cloutierremix2' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'cloutierremix2', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'cloutierremix2' ),
	) );
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'footer-menu' => __( 'Footer Menu', 'cloutierremix2' ),
	) );
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'mmenu' => __( 'MMenu', 'cloutierremix2' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

}
endif; // cloutierremix2_setup
add_action( 'after_setup_theme', 'cloutierremix2_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function cloutierremix2_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'cloutierremix2' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Sidebar Left', 'cloutierremix2' ),
		'id'            => 'sidebar-left',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	
	register_sidebar( array(
		'name'          => __( 'Contact', 'cloutierremix2' ),
		'id'            => 'contact',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	
}
add_action( 'widgets_init', 'cloutierremix2_widgets_init' );



/**
 * Adding Google Font the Right Way! Hank Added
 */
function theme_slug_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Cardo, translate this to 'off'. Do not translate
    * into your own language.
    */
    $cardo = _x( 'on', 'Cardo font: on or off', 'theme-slug' );
 
    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $open_sans = _x( 'on', 'Open Sans font: on or off', 'theme-slug' );
 
    if ( 'off' !== $cardo || 'off' !== $open_sans ) {
        $font_families = array();
 
        if ( 'off' !== $cardo ) {
            $font_families[] = 'Cardo:400,400italic,700';
        }
 
        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Open Sans:700italic,400,800,600';
        }
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    }
 
    return $fonts_url;
}



/**
 * Enqueue scripts and styles.
 */
function cloutierremix_scripts() {
// 	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.2.0', 'all' );
	
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/bootstrap/dist/css/bootstrap.min.css', array(), '3.2.0', 'all' );
	
	/**
	 * Below adds Google Fonts from the function above: theme_slug_fonts_url
	 */	
	wp_enqueue_style( 'theme-slug-fonts', theme_slug_fonts_url(), array(), null );
	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.2.0', 'all' );
	
	wp_enqueue_style( 'royalslider', get_template_directory_uri() . '/css/royalslider.css', array(), '1.0.5', 'all' );
	
	wp_enqueue_style( 'mmenu', get_template_directory_uri() . '/css/jquery.mmenu.all.css', array(), '4.7.3', 'all' );
	
	wp_enqueue_style( 'rs-default', get_template_directory_uri() . '/css/rs-default.css', array(), '1.0.5', 'all' );
	
	wp_enqueue_style( 'rs-fullwidth', get_template_directory_uri() . '/css/rs-fullwidth.css', array(), '1.0.5', 'all' );
		
	wp_enqueue_style( 'rs-minWhite', get_template_directory_uri() . '/css/rs-minimal-white.css', array(), '1.0.5', 'all' );
	
	wp_enqueue_style( 'bootstrapwp-style', get_stylesheet_uri() );
 
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.2.0', true );
	
	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '2.01', true );
		
	wp_enqueue_script( 'imagesloaded-js', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), '3.1.8', true );
	
	wp_enqueue_script( 'royalslider-js', get_template_directory_uri() . '/js/jquery.royalslider.min.js', array('jquery'), '9.5.4', true );	
	
	wp_enqueue_script( 'mmenu-js', get_template_directory_uri() . '/js/jquery.mmenu.min.all.js', array('jquery'), '4.7.3', true );
	
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '3.2.1', true );

	
	 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cloutierremix_scripts' );


/* 
Add Respond.js for IE
 */
if( !function_exists('ie_scripts')) {
	function ie_scripts() {
	 	echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
	   	echo ' <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->';
	   	echo ' <!--[if lt IE 9]>';
	    echo ' <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
	    echo ' <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
	   	echo ' <![endif]-->';
   	}
   	add_action('wp_head', 'ie_scripts');
} // end if


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Bootstrap Menu.
 */
require get_template_directory() . '/inc/bootstrap-walker.php';

/**	
 * Comments Callback.
 */
require get_template_directory() . '/inc/comments-callback.php';

/**
 * Author Meta.
 */
require get_template_directory() . '/inc/author-meta.php';