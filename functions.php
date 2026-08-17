<?php
define('THEME_URI', get_template_directory_uri());
function theme_name_scripts() {
  
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/css/reset.css');

    wp_enqueue_style('main-style', get_stylesheet_uri(), array('reset-style'));

  
    wp_enqueue_style('media-style', get_template_directory_uri() . '/css/media.css', array('main-style'));


    wp_enqueue_style('aos-css', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css');

    wp_enqueue_script('aos-js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array(), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), null, true);
     wp_localize_script('main-js', 'themeData', array(
        'themeUri' => THEME_URI
    ));
}
add_action('wp_enqueue_scripts', 'theme_name_scripts');

?>