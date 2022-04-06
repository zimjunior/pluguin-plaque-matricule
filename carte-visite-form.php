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

function initialize(){
	global $wpdb;
	$table_name = $wpdb->prefix . "demande_plaques";
	$wp_demande_plaques_db_version = '1.0.0';
	$charset_collate = $wpdb->get_charset_collate();
	if ( $wpdb->get_var("SHOW TABLES LIKE '{$table_name}'") != $table_name ) {	
		$sql = "CREATE TABLE $table_name (
				ID mediumint(9) NOT NULL AUTO_INCREMENT,
				`demande-plaque-number` text NOT NULL,
				`demande-plaque-qte` int(9) NOT NULL,
				`demande-plaque-kitpose` boolean DEFAULT false,
				`demande-plaque-region` varchar(50) NOT NULL,
				`demande-plaque-num-dep` int(9) NOT NULL,
				`demande-plaque-text` varchar(50)  NOT NULL,
				`demande-plaque-materiaux` varchar(50) NOT NULL,
				`demande-plaque-status` int(9) NOT NULL,
				`demande-plaque-name-customer` varchar(50) NOT NULL,
				`demande-plaque-email` varchar(50) NOT NULL,
				PRIMARY KEY  (ID)
		) $charset_collate;";
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
		// add_option('my_db_version', $wp_demande_plaques_db_version);
		
	}
	
}
register_activation_hook( __FILE__, 'initialize' );


