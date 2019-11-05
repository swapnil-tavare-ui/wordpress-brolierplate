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
        wp_enqueue_style('custom', CSS_DIR.'/main.css');    


        wp_register_script('jquery-latest', JS_DIR.'/jquery-v3.4.min.js', false, null, true);
        wp_enqueue_script('unveil', JS_DIR.'/jquery.unveil.js', array('jquery-latest') , null, true);
        wp_enqueue_script('custom', JS_DIR.'/custom.js', array('jquery-latest', 'unveil'), null, true);
    }
    add_action('wp_enqueue_scripts', 'theme_assets');
?>