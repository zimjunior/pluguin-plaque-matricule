<?php
require_once( str_replace('//','/',dirname(__FILE__).'/') .'../../../wp-config.php');
if(isset($_POST['valid'])){

    var_dump($_POST);
    /**
     * $wpd variable global
     */
    global $wpdb;
    $table =  $wpdb->prefix.'demande_plaques';
    // get all data from the first form

    // handler all data 
    $wpdb->insert($table, array(
        'demande-plaque-number' => $data_1,
        'demande-plaque-qte' => $data_2,
        'demande-plaque-kitpose' => $data_2,
        'demande-plaque-region' => $data_2,
        'demande-plaque-num-dep' => $data_2,
        'demande-plaque-text' => $data_2,
        'demande-plaque-materiaux' => $data_2,
        'demande-plaque-status' => $data_2,
        'demande-plaque-name-customer' => $data_2,
        'demande-plaque-email' => $data_2,     
    ));

}