
<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "projet-web-2");
$query = "SELECT * FROM produit";
$result = mysqli_query($connect, $query);




$chart_data = '';

while($row = mysqli_fetch_array($result))
{

 $chart_data .= "{ disponibilite:'".$row["disponibilite"]."', quantite:".$row["quantite"].", prix_prod:".$row["prix_prod"].", ref_prod:".$row["ref_prod"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>

 <?php  

 $que = "SELECT sexe, count(*) as number FROM produit GROUP BY sexe";  
 $res = mysqli_query($connect, $que); 

/*line data */


$db= "SELECT * FROM ratings";
$rb=mysqli_query($connect, $db);

$quer = "SELECT rating_action, count(*) as number FROM rating_info GROUP BY rating_action"; 
$dbb=$result = mysqli_query($connect, $quer);


 ?> 

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!-- <![endif]-->


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
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

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
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">vous avez 3 Notifications</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                            <i class="fa fa-check"></i>
                            <p>Serveur # 1 surchargé.</p>
                        </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                            <i class="fa fa-info"></i>
                            <p>Serveur #2  surchargé.</p>
                        </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                            <i class="fa fa-warning"></i>
                            <p>Serveur # 1 surchargé.</p>
                        </a>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                            id="message"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">vous avez 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                            <span class="message media-body">
                                <span class="name float-left">Jonathan Smith</span>
                                <span class="time float-right"> Juste maintenant </span>
                                    <p>salut,c'est un  example msg</p>
                            </span>
                        </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                            <span class="message media-body">
                                <span class="name float-left">Jack Sanders</span>
                                <span class="time float-right"> Il y a 5 minutes</span>
                                    <p>salut,c'est un  example msg</p>
                            </span>
                        </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                            <span class="message media-body">
                                <span class="name float-left">Cheryl Wheeler</span>
                                <span class="time float-right"> Il y a 10 minutes </span>
                                    <p>salut,c'est un  example msg</p>
                            </span>
                        </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                            <span class="message media-body">
                                <span class="name float-left">Rachel Santos</span>
                                <span class="time float-right">Il y a 15 minutes </span>
                                    <p>salut,c'est un  example msg</p>
                            </span>
                        </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i> Mon Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa-cog"></i> paramétre</a>

                        <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Se déconnecter</a>
                    </div>
                </div>

                <div class="language-select dropdown" id="language-select">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                        <i class="flag-icon flag-icon-us"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="language">
                        <div class="dropdown-item">
                            <span class="flag-icon flag-icon-fr"></span>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-es"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-us"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-it"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->

 
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Espace Admin</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Espace Admin</a></li>
                        <li><a href="#">Table</a></li>
                        <li class="active"> table de donnée  </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

 <div class="row">
     <div class="col-lg-6">
                        
                            <div class="card-body">
                               <center>
                                <div class="flot-container">
                                    <div id="cpu-load" class="cpu-load">

                                     <h4 class="mb-3"> Likes et Dislikes    </h4>
                                     <div id="chart"></div>
                                     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                  
                                      <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
         var data = google.visualization.arrayToDataTable([  
        ['rating_action', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($dbb))  
                          {  
                               echo "['".$row["rating_action"]."', ".$row["number"]."],";  
                          }  
                          ?>  
      ]);

        var options = {
          title: 'My Daily Activities',
         pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <div id="piechart_3d" style="width: 600px; height: 300px;"></div>

                                    </div>

                                </div>
                                </center>
                            </div>
                       
                  </div>
            <!--  </div> -->

              <!--  <div class="row"> -->
                  
                  <div class="col-lg-6">
                     
            
                            <div class="card-body">
                                <h4 class="mb-3">Ratings</h4>
                             <div class="flot-container">
                                   
                            
                           <div id="chart_div" style=" height:310px;"></div>
                    
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
         var data = google.visualization.arrayToDataTable([  
                          ['product_id', 'ratings'],  
                          <?php  
                          while($row = mysqli_fetch_array($rb))  
                          {  
                               echo "['".$row["product_id"]."', ".$row["ratings"]."],";  
                          }  
                          ?>  
                     ]); 

       

        var options = {
          title: 'Product ID vs. Ratings comparison',
          hAxis: {title: 'product_id', minValue: 0, maxValue: 15},
          vAxis: {title: 'ratings', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var char = new google.visualization.ScatterChart(document.getElementById('chart_div'));

        char.draw(data, options);
      }</script>
                            </div>
                            </div>
                            </div>
                        </div>




 <div class="row">
                        <div class="col-lg-6">
                      <!--  <div class="card"> -->
                         <center>
                            <div class="card-body">
                                <h4 class="mb-3">Répartition des produits par : Quantité /Prix /Disponibilité </h4>
                                <br /> 
                                <div class="flot-container">
                                    <div id="flot-line" class="flot-line">
                                         <div id="chart3"></div>
                                        <script type="text/javascript">
                                        Morris.Line({
                                          element : 'chart3',
                                          data:[<?php echo $chart_data; ?>],
                                          xkey:'ref_prod',
                                          ykeys:[ 'quantite','disponibilite','prix_prod'],
                                          labels:['quantite','disponibilite','prix_prod'],
                                          hideHover:'auto',
                                         stacked:true
                                        });
                                       </script></div>

                                </div>
                            </div>
                     <!--   </div> -->
                     </center>
                    </div><!-- /# column --> 
                   <!-- </div> -->
             <!--   <div class="row"> -->
                    <div class="col-lg-6">
                     <center>
                            <div class="card-body">
                               
                                <div class="flot-container">
                                    <div id="flot-pie" class="flot-pie-container">
                                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
                                             <script type="text/javascript">  
                                              google.charts.load('current', {'packages':['corechart']});  
                                               google.charts.setOnLoadCallback(drawChart);  
                                              function drawChart()  
                                              {  
                                                   var data = google.visualization.arrayToDataTable([  
                                                      ['Sexe', 'Number'],  
                                                   <?php  
                                                  while($row = mysqli_fetch_array($res))  
                                                     {  
                                                echo "['".$row["sexe"]."', ".$row["number"]."],";  
                                                     }  
                                                       ?>  
                                                     ]);  
                                                var options = {  
                                                 title: 'Pourcentage des Hommes et des Femmes ',  
                                                is3D:true,  
                                               pieHole: 0.4  
                                                   };  
                                              var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                                             chart.draw(data, options);  
                                            }  
                                           </script>  
                                          <div style="width:600px;">  
                                          <h3 align="center"> Répartition des produits selon le genre</h3>  
                                         <br />  
                                              <div id="piechart" style=" height: 300px;"></div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                      </center> 
                    </div>

                    
                </div>


            </div>
        </div>


    

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  flot-chart js -->
    <script src="vendors/flot/excanvas.min.js"></script>
    <script src="vendors/flot/jquery.flot.js"></script>
    <script src="vendors/flot/jquery.flot.pie.js"></script>
    <script src="vendors/flot/jquery.flot.time.js"></script>
    <script src="vendors/flot/jquery.flot.stack.js"></script>
    <script src="vendors/flot/jquery.flot.resize.js"></script>
    <script src="vendors/flot/jquery.flot.crosshair.js"></script>
 <script src="assets/js/init-scripts/flot-chart/curvedLines.js"></script>
 <script src="assets/js/init-scripts/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
  <!--  <script src="assets/js/init-scripts/flot-chart/flot-chart-init.js"></script>-->

</body>

</html>
