<?PHP
include "../../core/produitC.php";
$produitC=new ProduitC();
if (isset($_POST["ref_prod"])){
	$produitC->supprimerProduit($_POST["ref_prod"]);
	header('Location: table-produit.php');
}

?>