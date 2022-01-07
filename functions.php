<?php

/**
*Resigter a stylesheet
*/

function add_style_archifolio2() {

  wp_register_style('main.css', get_template_directory_uri().'/layouts/main.css',array(),1,'all');
  wp_enqueue_style('main.css');

}

//To load js scripts / files.
function load_js(){
  wp_register_script('p5.js', get_template_directory_uri().'/p5_example/libraries/p5.js',array(),1,'all');
  wp_enqueue_script('p5.js');

  wp_register_script('p5-test.js', get_template_directory_uri().'/p5_example/libraries/p5-test.js',array(),1,'all');
  wp_enqueue_script('p5-test.js');

  wp_register_script('p5.min.js', get_template_directory_uri().'/p5_example/libraries/p5.min.js',array(),1,'all');
  wp_enqueue_script('p5.min.js');

}
//Register style sheet.
add_action('wp_enqueue_scripts', 'load_js');



//Register style sheet.
add_action('wp_enqueue_scripts', 'add_style_archifolio2');


// show menu list in wp dashboard
add_theme_support('menus');


?>
