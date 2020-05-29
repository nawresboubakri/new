 <?PHP
 include "../../entities/categorie.php";
 include "../../core/categorieC.php";


if (isset($_POST['modifier'])){
    $categorieC=new CategorieC();
    $categorie=new categorie($_POST['cat'],$_POST['ref_cat'],$_POST['generation'],$_POST['marque'],$_POST['size'],$_POST['couleur'],$_POST['stock']);
    $categorieC->modifierCategorie($categorie,$_POST['ref_cat_ini']);
    echo $_POST['ref_cat_ini'];
    header('Location: table-produit.php');
}
?>