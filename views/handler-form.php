<?php
 $dirname = dirname(__FILE__);
 $root = false !== mb_strpos( $dirname, 'wp-content' ) ? mb_substr( $dirname, 0, mb_strpos( $dirname, 'wp-content' ) ) : $dirname;
require_once( $root . "wp-config.php" );

function add_data($tab){
    $table =  $wpdb->prefix.'demande_plaques';
    $res = $wpdb->insert($table, array(
        'demande-plaque-number' => $tab[0],
        'demande-plaque-qte' => $tab[1],
        'demande-plaque-kitpose' => $tab[2],
        'demande-plaque-region' => $tab[3],
        'demande-plaque-num-dep' => $tab[4],
        'demande-plaque-text' => $tab[5],
        'demande-plaque-materiaux' => $tab[6],
        'demande-plaque-status' => $tab[7],
        'demande-plaque-name-customer' => $tab[8],
        'demande-plaque-email' => $tab[9],   
        'demande-plaque-type-auto' => $tab[10] 
    ));
    $wpdb->query("INSERT INTO $table() VALUES()"); 
}
if(isset($_POST['valid'])){
    $tab = [];
    $tab[0] = $_POST['matricule'];
    $tab[1] = $_POST['qte'];
    $tab[2] = $_POST['kitpose'];
    $tab[3] = "Regions";
    $tab[4] = 15;
    $tab[5] = "Test";
    $tab[6] = "Materiaux";
    $tab[7] = 0;
    $tab[8] = "Khazim Ndiaye";
    $tab[9] = "kndiaye@jaba.store";
    $tab[10] = $_POST['ck2'];

    $res = $wpdb->insert($table, array( $tab));
    var_dump($res);

}