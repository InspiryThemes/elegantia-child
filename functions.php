<?php
/*-----------------------------------------------------------------------------------*/
/*	Load Child Theme Styles
/*-----------------------------------------------------------------------------------*/
if(!function_exists('load_child_theme_styles')){
    function load_child_theme_styles(){
        if (!is_admin()){
            ?>
            <link rel='stylesheet' id='child-custom-css'  href='<?php echo get_stylesheet_directory_uri() . '/child-custom.css'; ?>' type='text/css' media='all' />
            <?php
        }
    }
}
add_action( 'wp_head', 'load_child_theme_styles', PHP_INT_MAX );