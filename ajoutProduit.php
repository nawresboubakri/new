
<?php
include "../../core/produitC.php";
include "../../entities/produit.php";


if (isset($_POST['nom_prod']) and isset($_POST['quantite']) and isset($_POST['description_prod']) and isset($_POST['sexe'])and  isset($_POST['prix_prod']) and isset($_POST['cat']) ){

//$target_dir = "image/";
    $target_dir = "../../image/";

$imageFileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
//$name_image=rand(1000000000,9999999999).'.'.$imageFileType;
$name_image = basename($_FILES["image"]["name"]);  // TRUE

 $name = $target_dir . $name_image;

$target_file = $target_dir . $name_image;

   // move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) ;
move_uploaded_file($_FILES["image"]["tmp_name"], $name) ;
$produitC=new ProduitC();
$produit=new Produit($_POST['ref_prod'],$_POST['nom_prod'],$_POST['quantite'],$_POST['description_prod'],$_POST['sexe'],$_POST['disponibilite'],$_POST['prix_prod'],$_POST['cat'],$name);

$n=$produitC->test($_POST['nom_prod']);

if($n ==0)
{
  $produitC=new ProduitC();

$produitC->ajouterProduit($produit);

header('Location: table-produit.php');   
}
else
{ ?>

   <script>

      alert(" Produit existe déja ");
      
    
    </script>


    <?php
}
  


}

?>



<?php
/*$conn = mysqli_connect("localhost", "root", "", "projet-web-2");
$sql ="SELECT cat FROM categorie"; 
$req_theme=mysqli_query($conn,$sql);*/
 $catt=new CategorieC();

        
       $req_theme=$catt->afficherCategories();
?>

    

<!doctype html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="controle.css">
    <style>
      body
      {
        margin:0;
        padding:0;
        background-color:#f1f1f1;
      }
      .box
      {
        width:1270px;
        padding:20px;
        background-color:#fff;
        border:1px solid #ccc;
        border-radius:5px;
        margin-top:25px;
      }
    </style>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i> Espace Admin </a>
                    </li>
                    <h3 class="menu-title"> Éléments IU</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li> -->
                            <li><i class="fa fa-table"></i><a href="table-client.html">Client</a></li>
                            <li><i class="fa fa-table"></i><a href="table-panier.html">Panier</a></li>
                            <li><i class="fa fa-table"></i><a href="table-produit.php">Produit</a></li>
                            <li><i class="fa fa-table"></i><a href="table-coaching.html">Coaching</a></li>
                            <li><i class="fa fa-table"></i><a href="table-marketing.html">Marketing</a></li>
                            <li><i class="fa fa-table"></i><a href="table-service.html">Service après-vente</a></li>
                        </ul>
                    </li>
                

                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Graphiques</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="Gra_produit.html"> GraphiqueProduit</a></li>
                        
                        </ul>
                    </li>
                    
                    <h3 class="menu-title">Suppléments</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">S'identifier</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">S'inscrire</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Mot De Passe Oublier</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
       
                </div>

            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row" style="justify-content: center;">
                    <div class="col-lg-6" >
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Produit</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Ajouter Produit </h3>
                                        </div>
                                        
                                        <!-- <form  method='POST'  name="f" id="f"  action="ajoutProduit.php"  enctype="multipart/form-data" novalidate   onSubmit="return verif_Produit()"> -->
                                            <form  method='POST' name="f" id="f"action="ajoutProduit.php"  enctype="multipart/form-data" novalidate   onSubmit="return verif_Produit()">
                                            <div class="form-group body">
                                                <label>Ref_Produit</label>*
                                               
                                                <input type="number" id="ref_prod" class="form-control"  name="ref_prod" placeholder="Entrez reference" required="required" min="8" max="8"  minlength="8" maxlength="8" size="8" autocomplete='off' data-validate-length="1,1" class=" col-md-7 col-xs-12" >
                                            <div id="ref" style="color: red;"></div>
                                            </div> 
                                            <div class="form-group">
                                                <label >Nom</label>*
                                                <input type="text" id="nom_prod"
                                                class="form-control" name="nom_prod" placeholder="Entrez le nom de produit" required="required" size="25"  autocomplete='off' class="form-control col-md-7 col-xs-12">
                                                <div id="nom1" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >Quantite</label>*
                                                <input type="number"id="quantite" class="form-control" name="quantite" placeholder="Entrez la quantité de produit"  required="required" autocomplete='off' class="form-control col-md-7 col-xs-12"  size="3" >
                                                <div id="quant" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >Description de produit</label>*
                                                <input type="text" class="form-control" name="description_prod" placeholder="Entrez la description de produit"  required="required" autocomplete='off' class="form-control col-md-7 col-xs-12" id="description_prod" size="1000" >
                                                <div id="desc" style="color: red;"></div>
                                            </div>
                                             <div class="form-group">
                                                <label >Public Cible</label> 
                                              <!--  <input type="text" class="form-control" name="sexe" placeholder="Entrez le sexe de public cible ..."  required="required" autocomplete='off' class="form-control col-md-7 col-xs-12" id="sexe" size="1000" > -->
                                              <div></div>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               <input type="radio" id="sexe" name="sexe"  value="Homme">
                                               
                                               <label for="Homme">Homme</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               <input type="radio" id="sexe" name="sexe" value="Femme">
                                              
                                               <label for="Femme">Femme</label>
                                                <div id="sexe1" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >Disponibilite</label>*
                                                <input type="number" id="disponibilite" class="form-control" name="disponibilite" placeholder="Entrez la disponibilite de produit"  required="required" autocomplete='off' class="form-control col-md-7 col-xs-12"  size="1" >
                                                <div id="disp1" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >Prix de produit</label>*
                                                <input type="number" class="form-control"  name="prix_prod" placeholder="Entrez le prix de produit"  required="required" autocomplete='off' class="form-control col-md-7 col-xs-12" id="prix_prod" size="4">
                                                <div id="prix1" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >Nom Catégorie</label>*
                                               <!-- <input type="text" class="form-control" name="cat" placeholder="Entrez le nom de la categorie"  required="required" autocomplete='off' class="form-control col-md-7 col-xs-12" id="cat" size="10" >-->

                                              <select name="cat" id="cat" class="form-control col-md-7 col-xs-12 " >
                                               <option></option>
                                               <?php //while($row1=mysqli_fetch_array($req_theme)):;?>
                                               <?php     foreach($req_theme as $row){
                                                      $cat = $row['cat'];
 
                                                      ?>
                                               <option><?php echo $cat //echo $row1["cat"];?></option>
                                               <?php }//endwhile ?>
                                               </select>

                                                <div id="cat1" style="color: red;"></div>
                                            </div>
                                           <div class="form-group">
                                                <label >Image</label>*
                                              <!--  <input type="text" class="form-control" name="src" >  -->
                                         <input type="file" id="image" name="image"  width="400" height="300"  required="required" autocomplete='off'>
                                           <div id="image1" style="color: red;"></div>

                                            </div>  
                                            
                                                <div>
                                                    <button type="submit" class="btn btn-lg btn-info btn-block" name="ajouter" value="ajouter">
                                                       
                                                        <span >Ajouter </span>
                                                        
                                                    </button>
             
                                                </div>
                                                
                                        </form>
                                    
                                    </div>
                                </div>

                            </div>
                        </div> 

                    </div>

<!--<script type="text/javascript">
    function testajout(){  const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Signed in successfully'
});}
  
</script>-->


<script type="text/javascript">
     function verif_Produit(){
       var x= 0 ;
     

        var nom_prod = document.getElementById("nom_prod");
        var quantite = document.getElementById("quantite");
        var description_prod = document.getElementById("description_prod");
        var disponibilite = document.getElementById("disponibilite");
        var prix_prod = document.getElementById("prix_prod");
        var cat = document.getElementById("cat");
        var image = document.getElementById("image");
        var ref_prod=document.getElementById('ref_prod');
        var sexe=document.getElementById('sexe');
         

          
         if(!ref_prod.value){
           // document.getElementById("ref_prod").style.backgroundColor = "#FFA07A" ;
            document.getElementById("ref").textContent = " *La réfèrence est automatique!!!" ;
           /* if(x==0)
            {
                  x=1;
            }*/

        }

         if(!nom_prod.value){
            document.getElementById("nom_prod").style.backgroundColor = "#FFA07A" ;
            document.getElementById("nom1").textContent = " *Le nom est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }

        }
         if(!sexe.value){
           // document.getElementById("sexe").style.backgroundColor = "#FFA07A" ;
            document.getElementById("sexe1").textContent = " *Le public cible  est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }

        }

         if(nom_prod.value.length <2 ||nom_prod.value.length>25 )
        {
            document.getElementById("nom_prod").style.backgroundColor = "#FFA07A" ;
            document.getElementById("nom1").textContent = " *nom de produit non acceptable!!!" ;
            if(x==0)
            {
                  x=1;
            }   
        }
         if(!quantite.value){
           // erreur =" Veuillez renseigner une quantitée !!!";
            document.getElementById("quantite").style.backgroundColor = "#FFA07A" ;
             document.getElementById("quant").textContent = " *La quantite est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
         if(isNaN(quantite.value) || quantite.value<0)
        {
            document.getElementById("quantite").style.backgroundColor = "#FFA07A" ;
            document.getElementById("quant").textContent = " veillez saisir une quantite valide !!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
         if(!description_prod.value){
          
            document.getElementById("description_prod").style.backgroundColor = "#FFA07A" ;
            document.getElementById("desc").textContent = " *La description est obligatoire!!!"; 
            if(x==0)
            {
                  x=1;
            }
        }
         if(!disponibilite.value){
          
            document.getElementById("disponibilite").style.backgroundColor = "#FFA07A" ;
            document.getElementById("disp1").textContent = " *La disponibilite est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
          if(isNaN(disponibilite.value)|| disponibilite.value>1 || disponibilite.value<0)
        {
            document.getElementById("disponibilite").style.backgroundColor = "#FFA07A" ;
            document.getElementById("disp1").textContent = " * 1: disponible 0: non disponible!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
           if(!prix_prod.value){
       
            document.getElementById("prix_prod").style.backgroundColor = "#FFA07A" ;
              document.getElementById("prix1").textContent = " *Le prix unitaire est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
          if(isNaN(prix_prod.value)|| prix_prod.value<0 )
        {
            document.getElementById("prix_prod").style.backgroundColor = "#FFA07A" ;
            document.getElementById("prix1").textContent = " * prix  non acceptable!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }

    
       if(!image.value){
             document.getElementById("image1").textContent = " *L'image est obligatoire!!!" ;
           if(x==0)
           {
            x=1;
           }
          
        }
       if(!cat.value){
       
            document.getElementById("cat").style.backgroundColor = "#FFA07A" ;
            document.getElementById("cat1").textContent = " *La catégorie est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }

     if(cat.value.length <2 ||cat.value.length>25 )
        {
            document.getElementById("cat").style.backgroundColor = "#FFA07A" ;
            document.getElementById("cat1").textContent = " *nom de catégorie non acceptable!!!" ;
            if(x==0)
            {
                  x=1;
            }   
        }
         

         if(x==1)
   {
       return false;
   }
   else
   {
       return true;
   }
      
        }



  
</script>
                                     
  



 

                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                          <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script> 

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
                           
</body>
</html>
