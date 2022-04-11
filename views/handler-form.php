<?php
 $dirname = dirname(__FILE__);
 $root = false !== mb_strpos( $dirname, 'wp-content' ) ? mb_substr( $dirname, 0, mb_strpos( $dirname, 'wp-content' ) ) : $dirname;
require_once( $root . "wp-config.php" );
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/views/connect-db.php');
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
    $db = new Mysql();
    $tab[0] = "AA-235-B4";
    $tab[1] = 1;
    $tab[2] = true;
    $tab[3] = "Regions";
    $tab[4] = 15;
    $tab[5] = "Test";
    $tab[6] = "Materiaux";
    $tab[7] = false;
    $tab[8] = "Khazim Ndiaye";
    $tab[9] = "kndiaye@jaba.store";
    $tab[10] = "type1";
   
    $sql = "INSERT INTO wp_demande_plaques 
            (`demande-plaque-number`,`demande-plaque-qte`,`demande-plaque-kitpose`
            ,`demande-plaque-region`,`demande-plaque-num-dep`,`demande-plaque-text`
            ,`demande-plaque-materiaux`,`demande-plaque-status`
            ,`demande-plaque-name-customer`,`demande-plaque-email`,`demande-plaque-type-auto`)
           VALUES('$tab[0]', 1, TRUE, '$tab[3]', 15, '$tab[5]', '$tab[6]', FALSE, '$tab[8]',  '$tab[9]', '$tab[10]') ";
   
     $res =  $db->insertInto( $sql);

     var_dump($res["res"]);
  
  
} ?>
<?php 
if($res["res"] == true){

    //$query = "SELECT * FROM wp_demande_plaques wp WHERE wp.id = {$res["last_id"]}";
    $table_name = "wp_demande_plaques";
    $rowname = 'id';
    $operator = '=';
    $valueType = 'int';
    $res_query = $db -> selectWhere($table_name, $rowname, $operator, $res["last_id"], $valueType);
    if ($res_query -> num_rows > 0){
      $row = $res_query -> fetch_assoc();
      var_dump($row);
    }        
    ?>
      <html>
        <head> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
      .text-ctv{
        justify-content: center;
      }
      .text-fam {
       font-family: "Lucida Console", "Courier New", monospace;
       font-size: 13px;
       }
       .radio-ctv{
            
       }
       .my-card{
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 20%;
        padding: 1em;
       }
       .my-card:hover{
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
       }
       .card-footer-ctv{

       }
       .card-container {
        padding: 2px 16px;
        }
        .card-smll {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            height: 4em;
            width: 18em;
            padding: 1em;
        }

        input[type='radio'] {
        -webkit-appearance: none;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        outline: none;
        border: 3px solid gray;
    }

    input[type='radio']:before {
        content: '';
        display: block;
        width: 60%;
        height: 60%;
        margin: 20% auto;
        border-radius: 50%;
    }

 input[type="radio"]:checked:before {
        background: green;
        
    }
    
    input[type="radio"]:checked {
      border-color:green;
    }

    .role {
        margin-right: 80px;
        margin-left: 20px;
        font-weight: normal;
    }

    .checkbox label {
        margin-bottom: 20px !important;
    }

    .roles {
        margin-bottom: 40px;
    }
 
    label {
  width: 100%;
  font-size: 1rem;
}
.card-input-element+.card {
  height: calc(36px + 2*1rem);
  color: var(--primary);
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 2px solid transparent;
  border-radius: 4px;
}

.card-input-element+.card:hover {
  cursor: pointer;
}

.card-input-element:checked+.card {
  border: 2px solid var(--primary);
  -webkit-transition: border .3s;
  -o-transition: border .3s;
  transition: border .3s;
}

.card-input-element:checked+.card::after {
  content: '\e5ca';
  color: #AFB8EA;
  font-family: 'Material Icons';
  font-size: 24px;
  -webkit-animation-name: fadeInCheckbox;
  animation-name: fadeInCheckbox;
  -webkit-animation-duration: .5s;
  animation-duration: .5s;
  -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

@-webkit-keyframes fadeInCheckbox {
  from {
    opacity: 0;
    -webkit-transform: rotateZ(-20deg);
  }
  to {
    opacity: 1;
    -webkit-transform: rotateZ(0deg);
  }
}

.pd {
    padding-left: 40px;
}
@keyframes fadeInCheckbox {
  from {
    opacity: 0;
    transform: rotateZ(-20deg);
  }
  to {
    opacity: 1;
    transform: rotateZ(0deg);
  }
  .img-rec {
  clip-path:ellipse(33% 50%);
  height: 5px;
  width: 7px;
  object-fit: cover;
}

.img-carree {
clip-path:ellipse(50% 50%);
}
}
.myspan {
    border-radius:100%;
    outline: 2px solid black;
    width: 5%;
    text-align:center
}

.imgcarre {
    display: inline-block;
    vertical-align: top;
    background:#e6e9ed;
}

.imagecarre:hover{
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    cursor: pointer;
}
.shadow {
    box-shadow: 5px 5px 10px 2px rgba(0,0,0,.8);
}
.image_rss{
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    height: 80px;
    margin-left: auto;
    margin-right: auto;
    background-color: #f0f2f0;
    padding: 15px;
    width: 380px;
    
}
 
#rs{
    font-family: Gill Sans Extrabold, sans-serif;
    font-size: 20px;
}



  </style>
        </head>
        <body>
              <div class="container">
                    <h1 class="alert alert-info">Passer a la phase de payement</h1>
              </div>
        </body>
        </html>  
<?php
    
    // integration de woocomerce
}
else {


    ?>
    <html>
        <head>
        </head>
        <body>
              <div class="container">
                    <h1 class="alert alert-danger">Something was wrong</h1>
              </div>
        </body>
        </html> 
    <?php
    }
 ?>