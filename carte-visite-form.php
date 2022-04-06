<?php
/*
Plugin Name:  Carte Visite Plugin
Plugin URI:   https://github.com/zimkha 
Description:  A short little description of the plugin. It will be displayed on the Plugins page in WordPress admin area. 
Version:      1.0
Author:       Khazim 
Author URI:   https://github.com/zimkha
License:      GPL2
License URI:  https://github.com/zimkha
Text Domain:  wpb-pluging
Domain Path:  /languages
*/


class CarteVisiteForm{
	function show_link(){
		echo "
		<h3><a href='wp-content/plugins/carte-visite-form/views/form-ctv.php'> Passer a la formulaire pour regarder</a></h3>
		";
	}
}

if( class_exists( 'CarteVisiteForm')) {
  $item = new CarteVisiteForm();
}
add_action( 'wp_body_open', $item->show_link() );

