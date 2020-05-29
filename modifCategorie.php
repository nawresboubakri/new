<?php 
 include "../../core/produitC.php";
 include"../../entities/categorie.php";
?>

<?PHP



if (isset($_POST['modifier'])){
    $ref=rand(1000000000,9999999999).'.'.$_POST['cat'];
    $categorieC=new CategorieC();
    $categorie=new categorie($_POST['cat'],$ref,$_POST['generation'],$_POST['marque'],$_POST['size'],$_POST['couleur'],$_POST['stock']);
    $categorieC->modifierCategorie($categorie,$_POST['ref_cat_ini']);
    echo $_POST['ref_cat_ini'];
    header('Location: table-produit.php');
}
?>
 <?PHP
        
                                                  
        if (isset($_GET['ref_cat'])){

        $categorieC=new CategorieC();
        $result=$categorieC->recupererCategorie2($_GET['ref_cat']);
                                                    
         foreach($result as $row){
         $cat=$row['cat'];
        $ref_cat=$row['ref_cat'];
        $generation=$row['generation'];
        $marque=$row['marque'];
        $size=$row['size'];
        $couleur=$row['couleur'];
        $prix_prod=$row['stock'];
    }
}
                                                 
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
                            <li><i class="fa fa-table"></i><a href="table-produit.html">Produit</a></li>
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
                                <strong class="card-title">Catégorie</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Modifier Catégorie </h3>
                                        </div>
                                                <hr>
                                      
                                           <form  method="POST" action="modifCategorie.php" nom="f" id="f" novalidate onSubmit="return verif_Categorie1()" >

                                            <div class="form-group">
                                                <label >Nom de la categorie</label>
                                                <input type="text" name="cat" id="cat" required="required"  value="<?PHP echo $cat ?>" class="form-control" maxlength="25" minlength="2" autocomplete='off' class="form-control col-md-7 col-xs-12">
                                                 <div id="cat1" style="color: red;"></div>

                                            </div>
                                             <div class="form-group">
                                                <label >Référence  de la categorie</label>
                                                <input type="number" id="ref_cat" name="ref_cat" required="required"  value="<?PHP echo $ref_cat ?>" class="form-control" maxlength="4" autocomplete='off' class="form-control col-md-7 col-xs-12">
                                                 <div id="ref1" style="color: red;" ></div>

                                            </div>
                                            <div class="form-group">
                                                <label >Generation</label>
                                                <input type="text" id="generation" name="generation" required="required"  value="<?PHP echo $generation ?>" class="form-control"  minlength="2" maxlength="25" autocomplete='off' class="form-control col-md-7 col-xs-12">
                                                <div id="gen" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >Marque</label>
                                                <input type="text" id="marque" name="marque" class="form-control" required="required"   value="<?PHP echo $marque ?>"  minlength="2" maxlength="50" autocomplete='off' class="form-control col-md-7 col-xs-12" >
                                                <div id="mrq" style="color: red;"></div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label >Size</label>
                                                <input type="text" id="size" name="size" class="form-control" required="required"  value="<?PHP echo $size ?>" minlength="2" maxlength="20" autocomplete='off' class="form-control col-md-7 col-xs-12">
                                                  <div id="size1" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >Couleur</label>
                                                <input type="text" id="couleur" name="couleur" required="required" class="form-control"  value="<?PHP echo $couleur ?>"  minlength="2" maxlength="40" autocomplete='off' class="form-control col-md-7 col-xs-12" >
                                                  <div id="couleur1" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >Stock</label>
                                                <input type="number" name="stock" id="stock" required="required"class="form-control" value="<?PHP echo $stock?>"autocomplete='off' class="form-control col-md-7 col-xs-12" minlength="1"> 
                                                <div id="stock1" style="color: red;"></div>
                                            </div>
                                            
                                           
                                            <div>
                                                <input type="hidden" name="ref_cat_ini" value="<?PHP echo $_GET['ref_cat'];?>">
                                            </div>
                                                <div>
                                                    <button type="submit" class="btn btn-lg btn-info btn-block" name="modifier" value="modifier">
                                                       
                                                        <span >Modifier </span>
                                                        
                                                    </button>
                                                </div>

                                                
                                        </form>
                    

                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->

                 <script type="text/javascript">
     function verif_Categorie1(){
       var x= 0 ;
     

        var cat = document.getElementById("cat");
        var ref_cat = document.getElementById("ref_cat");
        var generation = document.getElementById("generation");
        var marque= document.getElementById("marque");
        var size = document.getElementById("size");
        var couleur = document.getElementById("couleur");
        var stock = document.getElementById("stock");
     
         

          
         if(!cat.value){
         
            document.getElementById("cat1").textContent = " * Le nom de la catégorie est obligatoire !!!" ;
            document.getElementById("cat").style.backgroundColor = "#FFA07A" ;

            if(x==0)
            {
                  x=1;
            }

        }

         if(!ref_cat.value){
            document.getElementById("ref_cat").style.backgroundColor = "#FFA07A" ;
            document.getElementById("ref1").textContent = " *La référence est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }

        }

         if(cat.value.length <2 ||cat.value.length>25 )
        {
            document.getElementById("cat").style.backgroundColor = "#FFA07A" ;
            document.getElementById("cat1").textContent = " *nom de catégorie non accepté!!!" ;
            if(x==0)
            {
                  x=1;
            }   
        }
         if(!generation.value){
        
            document.getElementById("generation").style.backgroundColor = "#FFA07A" ;
             document.getElementById("gen").textContent = " *L'indication de la génération est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
         if(isNaN(ref_cat.value) || ref_cat.value.length<2 || ref_cat.value.length>10 )
        {
            document.getElementById("ref_cat").style.backgroundColor = "#FFA07A" ;
            document.getElementById("ref1").textContent = " la référence n'est pas valide !!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
         if(!marque.value){
          
            document.getElementById("marque").style.backgroundColor = "#FFA07A" ;
            document.getElementById("mrq").textContent = " *L'indication de la marque est obligatoire!!!"; 
            if(x==0)
            {
                  x=1;
            }
        }
         if(!size.value || size.value<0 ){
          
            document.getElementById("size").style.backgroundColor = "#FFA07A" ;
            document.getElementById("size1").textContent = " *L'indication de la size est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
     
           if(!couleur.value){
       
            document.getElementById("couleur").style.backgroundColor = "#FFA07A" ;
              document.getElementById("couleur1").textContent = " *L'indication de couleur  est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
          if(isNaN(stock.value)|| stock.value<0 )
        {
            document.getElementById("stock").style.backgroundColor = "#FFA07A" ;
            document.getElementById("stock1").textContent = " * nombre de stock  non acceptable!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }

    
       if(!stock.value){
             document.getElementById("stock1").textContent = " *L'indication de stock est obligatoire!!!" ;
              document.getElementById("stock").style.backgroundColor = "#FFA07A" ;
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
