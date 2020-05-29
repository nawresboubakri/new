
<?php
include '../core/CategorieC.php';

$categorieC=new CategorieC();
$val_search='';
/*if(isset($_GET['recherche']) && !empty($_GET['recherche'])){
$val_search=$_GET['recherche'];

$listecategorie=$categorieC->rechercherListeCategorie($val_search);
}else*/ if(isset($_GET['tri']) && !empty($_GET['tri'])){
$listecategorie=$categorieC->triCategories($_GET['tri'],$_GET['order']);
}else{
$listecategorie=$categorieC->afficherCategories();

}
?>