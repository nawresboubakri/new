


 <?PHP
 include "../../entities/produit.php";
 include "../../core/productC.php";


if (isset($_POST['modifier'])){
$target_dir = "image/";

$imageFileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
//$name_image=rand(1000000000,9999999999).'.'.$imageFileType;
$name_image = basename($_FILES["image"]["name"]);  // TRUE

 $name = $target_dir . $name_image;

$target_file = $target_dir . $name_image;

   // move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) ;
move_uploaded_file($_FILES["image"]["tmp_name"], $name) ;

    $produitC=new ProduitC();
    $produit=new produit($_POST['ref_prod'],$_POST['nom_prod'],$_POST['quantite'],$_POST['description_prod'],$_POST['sexe'],$_POST['disponibilite'],$_POST['prix_prod'],$_POST['cat'],$name);
    $produitC->modifierProduit($produit,$_POST['ref_prod_ini']);
    echo $_POST['ref_prod_ini'];

    
    header('Location: table-produit.php');


}
?>
