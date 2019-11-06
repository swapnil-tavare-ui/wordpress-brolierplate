<?php 
    define( 'THEME_DIR', get_template_directory_uri() );
    define( 'CSS_DIR', THEME_DIR . '/assets/css' );
    define( 'JS_DIR', THEME_DIR . '/assets/js' );	
    define( 'IMAGES_DIR', THEME_DIR . '/assets/images' );

    require_once(__DIR__.'/includes/remove-junk.php');
    
    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
    }

    function theme_assets() {
        $realpathcss = get_template_directory().'/assets/css';
        $realpathjs = get_template_directory().'/assets/js';

        wp_enqueue_style('main', CSS_DIR.'/main.css',array(), filemtime( $realpathcss.'/main.css' ),'all');    
        wp_enqueue_style('font-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap');    

        wp_enqueue_script('jquery-latest', JS_DIR.'/jquery-v3.4.min.js', false, filemtime( $realpathjs.'/jquery-v3.4.min.js' ), true);
        wp_enqueue_script('unveil', JS_DIR.'/jquery.unveil.js', array('jquery-latest') , filemtime( $realpathjs.'/jquery.unveil.js' ), true);
        wp_enqueue_script('custom', JS_DIR.'/custom.js', array('jquery-latest', 'unveil'), filemtime( $realpathjs.'/custom.js' ), true);
    }
    add_action('wp_enqueue_scripts', 'theme_assets');
?>