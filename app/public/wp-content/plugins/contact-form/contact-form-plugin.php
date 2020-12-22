<?php
/**
*Plugin Name: Contact Form Plugin
*/

function contact_form_plugin (){
  $content = '';
  $content .= '<h2> Contact US!</h2>';

  return $content;
}
add_shortcode('example_form', 'contact_form_plugin');
 ?>
