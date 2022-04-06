<?php
// $json  = file_get_contents("../data/regions.json");
// $regions_deps = json_decode($json, true);
// var_dump($regions_deps);
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

<script> </script>
</head>
<body>
    <!-- <header class=" header-default header-v1"><div class=""><div class="header-mobile hidden-lg hidden-md"><div class="container"><div class="row"><div class="left col-xs-4"><div class="hidden-lg hidden-md"><div class="canvas-menu gva-offcanvas"> <a class="dropdown-toggle" data-canvas=".mobile" href="#"><i class="gv-icon-103"></i></a></div><div class="gva-offcanvas-content mobile"><div class="close-canvas"><a><i class="gv-icon-8"></i></a></div><div class="wp-sidebar sidebar ps-container" data-ps-id="a5c52b8a-351f-578a-7b28-9f9214692e9e"><div id="gva-mobile-menu" class="navbar-collapse"><ul id="menu-main-menu" class="nav navbar-nav gva-nav-menu gva-mobile-menu"><li id="menu-item-3024" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3024"><a href="http://wordpress.test/wordpress/"><i class="fa fas fa-home"></i>Accueil</a></li><li id="menu-item-4122" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3567 current_page_item menu-item-4122"><a href="http://wordpress.test/wordpress/faire-ma-carte-grise/"><i class="fa far fa-address-card"></i>Faire ma carte grise</a></li><li id="menu-item-3496" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3496"><a href="http://wordpress.test/wordpress/prix-plaque-immatriculation/"><i class="fa ico_plaques"></i>Plaques d’immatriculation</a></li><li id="menu-item-3065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3065"><a href="http://wordpress.test/wordpress/tarifs/"><i class="fa ico_tarifs"></i>Tarifs</a></li><li id="menu-item-3168" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3168"><a href="http://wordpress.test/wordpress/professionnels-de-lautomobile/"><i class="fa ico_pros"></i>Professionnels</a></li><li id="menu-item-3025" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3025"><a href="http://wordpress.test/wordpress/contact/"><i class="fa fas fa-envelope"></i>Contact</a></li></ul></div><div class="after-offcanvas"></div><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div></div></div></div><div class="center text-center col-xs-4"><div class="logo-menu"> <a href="http://wordpress.test/wordpress/"> <noscript><img  alt="Carte Grise Nice à domicile" data-src="http://wordpress.test/wordpress/wp-content/themes/kiamo/images/logo-mobile.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src="http://wordpress.test/wordpress/wp-content/themes/kiamo/images/logo-mobile.png" alt="Carte Grise Nice à domicile" /></noscript><img class="lazyload smush-detected-img smush-image-1" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E" data-src="http://wordpress.test/wordpress/wp-content/themes/kiamo/images/logo-mobile.png" alt="Carte Grise Nice à domicile"> </a></div></div><div class="right col-xs-4"><div class="main-search gva-search"> <a><i class="gv-icon-52"></i></a></div></div></div></div></div><div class="header-mainmenu hidden-xs hidden-sm"><div class="container"><div class="prelative"><div class="row"><div class="logo col-lg-2 col-md-2 col-sm-12"> <a class="logo-theme" href="http://wordpress.test/wordpress/"> <noscript><img  alt="Carte Grise Nice à domicile" data-src="http://wordpress.test/wordpress/wp-content/themes/kiamo/images/logo.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src="http://wordpress.test/wordpress/wp-content/themes/kiamo/images/logo.png" alt="Carte Grise Nice à domicile" /></noscript><img class="ls-is-cached lazyloaded smush-detected-img smush-image-2" src="http://wordpress.test/wordpress/wp-content/themes/kiamo/images/logo.png" data-src="http://wordpress.test/wordpress/wp-content/themes/kiamo/images/logo.png" alt="Carte Grise Nice à domicile"> </a></div><div class="col-sm-10 col-xs-12 pstatic header-right"><div class="content-innter clearfix"><div id="gva-mainmenu" class="pstatic main-menu header-bottom"><div id="gva-main-menu" class="navbar-collapse"><ul id="menu-main-menu-1" class="nav navbar-nav gva-nav-menu gva-main-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3024"><a href="http://wordpress.test/wordpress/"><i class="fa fas fa-home"></i>Accueil</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3567 current_page_item menu-item-4122"><a href="http://wordpress.test/wordpress/faire-ma-carte-grise/"><i class="fa far fa-address-card"></i>Faire ma carte grise</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3496"><a href="http://wordpress.test/wordpress/prix-plaque-immatriculation/"><i class="fa ico_plaques"></i>Plaques d’immatriculation</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3065"><a href="http://wordpress.test/wordpress/tarifs/"><i class="fa ico_tarifs"></i>Tarifs</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3168"><a href="http://wordpress.test/wordpress/professionnels-de-lautomobile/"><i class="fa ico_pros"></i>Professionnels</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3025"><a href="http://wordpress.test/wordpress/contact/"><i class="fa fas fa-envelope"></i>Contact</a></li></ul></div></div></div><div class="main-search gva-search"> <a><i class="fa fa-search"></i></a></div><div class="mini-cart-header cart-v2"></div></div></div></div></div></div></div></header> -->
     
        <div class="container">
        <h3 class="">Quelles plaques souhaitez-vous commander ?</h3>
 
        <form class="" method="post" name="valid" >
        <div class="card">
         <div class="card-header">
        Indiquez le numéro d'immatriculation
        </div>

            <div class="card-body">
             <div class="row">
              <div class="col-sm">
                 <div class="form-control">
                 <div class="input-group input-group-lg">
                     <input  type="text" id="matricule" onkeyup="handlerInput()" spellcheck="false" autocorrect="off"  maxlength="12" class="form-control text-ctv" placeholder="AA-123-BB"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                 </div>
              </div>
              <div class="col-sm">
               
              </div>
              <div class="col-sm">
              </div>
             </div>
        </div>
        </div>
        <br><br>
        <div class="card">
            <div class="card-body">
            <span class="badge bg-secondary">3</span> Choisissez le type de véhicule
            <div class="d-flex justify-content-evenly">
                <div class="col-md-3 my-card">
                    <div class="custom-control custom-radio image-checkbox">
                        <input type="radio" class="custom-control-input" id="ck2a" name="ck2">
                        <label class="custom-control-label" for="ck2a">
                            <img src="left-2.png"  width="250" height="250" alt="#" class="img-fluid">
                        </label>
                        <h5 class="text-fam">Auto</h5>
                    </div>
                </div>

                <div class="col-md-3 my-card">
                    <div class="custom-control custom-radio image-checkbox">
                        <input type="radio" class="custom-control-input" id="ck2b" name="ck2">
                        <label class="custom-control-label" for="ck2b">
                            <img src="left-2.png" width="250" height="250" alt="#" class="img-fluid">
                        </label>
                        <h5 class="text-fam">Moto / Scotter</h5>
                    </div>
                </div>
                <div class="col-md-3 my-card">
                    <div class="custom-control custom-radio image-checkbox">
                        <input type="radio" class="custom-control-input" id="ck2c" name="ck2">
                        <label class="custom-control-label" for="ck2c">
                            <img src="left-2.png" width="250" height="250" alt="#" class="img-fluid">
                        </label>
                        <h5 class="text-fam">Camion / 4x4</h5>
                    </div>
                </div>
                
                <div class="col-md-3 my-card">
                    <div class="custom-control custom-radio image-checkbox">
                        <input type="radio" class="custom-control-input" id="ck2d" name="ck2">
                        <label class="custom-control-label" for="ck2d">
                            <img src="left-2.png" width="250" height="250" alt="#" class="img-fluid">
                        </label>
                        <h5 class="text-fam">Diplomatique / Transit</h5>
                    </div>
                </div>
        </div>

            </div>
            
       </div>
       <br>
    <!-- End  -->

      <div class="card"> <!-- Start Choisissez la région et le département -->
        <div class="card-body">
            <div class="card-title">
                <span class="badge bg-secondary">3</span> Choisissez la région et le département
            </div>
            <div class="row">

            </div>
            <div class="row">
                
            </div>
        </div>
      </div> <!-- End  -->

            <br><br>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <span class="badge bg-secondary">4</span>Choisissez le mode de fixation
                    </div>
                    <div class="row pd">
                            <div class="col-md-3 my-card">
                                    <div class="custom-control custom-radio image-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="kitpose">
                                        <label class="custom-control-label" for="kitpose">
                                            <img src="left-2.png"  width="250" height="250" alt="#" class="img-fluid">
                                        </label>
                                        <h5 class="text-fam">Kit pose</h5>
                                    </div>
                            </div>
                      </div>
                    </div>
                </div>
                <br><br>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <span class="badge bg-secondary">5</span>Quantité
                        </div>
                        <div class="row">
                                <div class="col-md-3">
                                <select class="form-select" aria-label="Default select example">
                                        <option selected>Quantité</option>
                                        <option value="1">1 plaque</option>
                                        <option value="2">2 plaques</option>
                                        <option value="3">3 plaques</option>
                                        <option value="4">4 plaques</option>
                                        <option value="5">5 plaques</option>
                                        <option value="6">6 plaques</option>
                                </select>
                                </div>
                        </div>
                    </div>
         </div>
         <br><br>
         <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <span class="badge bg-secondary">6</span>  Choisissez la région et le département
                </div>
                <div  id="container_regions">
                </div>
                 <div class="d-flex justify-content-evenly" id="container_depart">

                </div>
            </div>
         </div>
        <br><br>
         <div class="image_rss" style="text-align:center;" id="rs">
            
         </div>
         <br><br>
         <button type="submit" name="valid" class="btn btn-primary">Continuer</button> 
         </div> <!-- End Container -->

         
 

 </form>

    
    
        <?php ?>
     <?php ?>
     <?php ?>
     <?php ?>

    </div>
    

</body>
<script>
    let all_regions = [];
    myObjecTrans = {
        "region": "",
        "dep": ""
    };

/**
 * Formater les text dans un format defini
 * 
 */
function formatText(text){
        let  return_text =  text.toLowerCase();
        let replaced =  return_text.split(' ').join('_')
        return replaced
}

/**
 * Recuperation des regions et de leur departements dans un fichier json
 */
var data_json = []
let data_id = [];
fetch("../data/regions.json")
        .then(response => {
            data_json = response.json();
           // console.log(data_json, "ooookkkk")
           return data_json;
    })
    .then(jsondata => {
        let tab = [];
        let regions = document.getElementById('container_regions');
         document.getElementById('container_regions').className = "d-flex justify-content-evenly"
        jsondata.forEach(element => {  
            let id_img =   formatText(element['name_region']);
            let data_id = [];
            data_id.push(id_img);
            //console.log(data_id);
            let img = document.createElement("IMG");  // creation de la balise image
            img.style.height = "50px";
            img.style.width  = "50px";
            img.style.cursor = "pointer"
            img.setAttribute("class", "imgcarre");
            img.clipPath = "inset(60px 60px 60px 60px)"; 
            img.setAttribute("id", data_id);
            img.addEventListener("click", handlerDeps)
            img.addEventListener("mouseover", function (event) {
                img.classList.add("shadow")
            }, false);
            img.addEventListener("mouseout", function (event) {
                img.classList.remove("shadow")
             }, false);
            img.title = element["name_region"]
            img.src= element['logo_image']
            regions.appendChild(img);  
    });
});

let container_dep = document.getElementById('container_depart');
container_dep.style.padding = "5px 1em 0 0"

/**
 * Fonction qui gere l'affichage des departement de chaque region
 * 
 */
function handlerDeps (){
    let id = this.id;
    myObjecTrans = {}
    myObjecTrans.region = id
    //console.log(myObjecTrans)
    let dataFetch = new Promise((resolve, reject) =>{
        fetch("../data/regions.json")
        .then(response => {
            data_j = response.json();
            return data_j;
        }).
        then((d_json) =>{
                all_regions = []
                all_regions.push(d_json);
                all_regions[0].forEach(el =>{
                    let name = el["name_region"]
                    reg_n = formatText(name);
                    if (id == reg_n){
                       let deps = el["departements"];
                       console.log(deps, reg_n)
                       while(container_dep.firstChild) {
                        container_dep.removeChild(container_dep.firstChild);
                     }
                       deps.forEach(n =>{
                           dataSpan = document.createElement("span"); 
                           dataSpan.setAttribute("class", "myspan");
                           dataSpan.title = n["dep_name"];
                           dataSpan.style.cursor = "pointer"
                           dataSpan.innerHTML = n["num_dep"];
                           dataSpan.name = el["name_region"]
                           dataSpan.setAttribute("id", n["num_dep"]);
                           dataSpan.addEventListener("click", handler)
                           dataSpan.addEventListener("mouseover", handlerMouseOver)
                           container_dep.appendChild(dataSpan);
                           
                       })
                   }                    
                })            
        })
    });
}

/**
 * cette function gere lq recuperation des donnees de la regions
 * pour le mettre dans un Objec
 */
function handler (){
    let ele = document.getElementById(this.id)
    let id = this.id
    name_region = formatText(this.name);
    myObjecTrans.dep = id;
    all_regions[0].forEach(el =>{
        let name = el["name_region"]
        reg_n = formatText(name);
        if (name_region == reg_n){
            myObjecTrans.region = el["logo_image"]          
        }
    });
}

function handlerMouseOver (){
    console.log(this)
    //this.target.style.box-shadow = "0 8px 16px 0 rgba(0,0,0,0.2)"
}

/**
 *  Handler les changes
 */
let txtMat = document.getElementById("rs");
function handlerInput(){
    let val = document.getElementById("matricule").value
    val = val.toUpperCase()
    rs.textContent = val
        
}
</script>
</html>


<?php
$regions_deps  = file_get_contents("../data/data.json");

if(isset($_POST['valid'])){
    session_start();
}
else {
   // show this page
}

