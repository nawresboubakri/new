<?php
include '../core/CategorieC.php';

$categorieC=new CategorieC();
$val_search='';


 if(isset($_GET['tri']) && !empty($_GET['tri'])){
$listeCategories=$categorieC->triCategorie($_GET['tri'],$_GET['order']);
$listecategories=$categorieC->afficherCategories();
header('Location: table-produit.php');
}else{
$listecategories=$categorieC->afficherCategories();


}

?>