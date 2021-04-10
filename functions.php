<?php 
// Rimuovo JQuery di WP
wp_deregister_script('jquery');

// Registro CSS e JS
if ( ! function_exists( 'mwd_styles' ) ) {
    function mwd_resources() {
        // CSS
        wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
        wp_enqueue_style( 'mwd-style', get_template_directory_uri().'/assets/css/main.css');
        wp_enqueue_style( 'awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
		wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap');
      }

        //JS
        wp_enqueue_script( 'ajax-js', '//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js', '','' ,true);
	    wp_enqueue_script( 'jquery-js', 'https://code.jquery.com/jquery-3.3.1.min.js', '','' ,true);
	    wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', '','' ,true);
	    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', '','' ,true);
	    wp_enqueue_script( 'mwd-scripts', get_template_directory_uri() . '/assets/js/main.js', '','' ,true);
    }



add_action( 'wp_enqueue_scripts', 'mwd_resources' );

// Theme setup
if ( ! function_exists( 'mwd_setup' ) ) {

    function mwd_setup() {

        // Enable title in header
        add_theme_support( "title-tag" );

        // Enable automatic feed links
        add_theme_support( 'automatic-feed-links' );

        // Enable featured image
        add_theme_support( 'post-thumbnails' );

		//Custom Header
		add_theme_support( 'custom-header' );

        // Thumbnail sizes
        add_image_size( 'mwd_single', 800, 999, false );
        add_image_size( 'mwd_big', 1400, 928, true ); 	//(cropped)

        // Custom menu areas
        register_nav_menus( array(
            'header' => esc_html__( 'Header', 'mwd' ),
            'footer' => esc_html__( 'Footer', 'mwd' ),
            ) );

        // Load theme languages
        load_theme_textdomain( 'mwd', get_template_directory().'/languages' );

        }

      }
      add_action( 'after_setup_theme', 'mwd_setup' );

// Custom Walker Class per menù Bootstrap
require_once('wp_bootstrap_navwalker.php');

// Aggiungo Widget
function ourWidgetsInit() {
	
	register_sidebar( array(
		'name' => 'Sidebar Right',
		'id' => 'sidebar-right',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar( array(
		'name' => 'Sidebar Left',
		'id' => 'sidebar-left',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer2',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer3',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 4',
		'id' => 'footer4',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
}

add_action('widgets_init', 'ourWidgetsInit');

// Breadcrumbs
function mwd_bootstrap_breadcrumb() {


    if (!is_front_page()) {
	
	// Link Homepage
        echo '<nav style="--bs-breadcrumb-divider: \'>\';" aria-label="breadcrumb">';
		echo '<ol class="breadcrumb mt-3">';
		echo '<li class="breadcrumb-item">';
        echo '<a href="';
        echo esc_url(home_url('/'));
        echo '">Home</a></li>';
       
        if (is_category() or is_single()){
            echo '<li class="breadcrumb-item">';
			echo the_category('&nbsp <span class="text-muted">|</span> &nbsp');
			echo '</li>';
        } 
		
		if (is_single() or is_page()){
            echo '<li class="breadcrumb-item active" aria-current="page">';
			echo the_title();
			echo '</li>';
        } 

        echo '</ol></nav>';
    }
}
// Excerpt 
function mwd_excerpt_trim() {
	// text = tutto il testo
	$text = get_the_content();
	// Clear out shortcodes
	$text = strip_shortcodes( $text );
	// Caratteri da visualizzare nell'excerpt
	$caratteri=120;
	
	$text = substr( $text, 0, $caratteri );
	// Add a read more tag
	$text .= '…';
	
	return $text;
}
add_filter('wp_trim_excerpt', 'mwd_excerpt_trim');


?>