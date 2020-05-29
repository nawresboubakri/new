
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?PHP
include "../../entities/produit.php";
include "../../core/produitC.php";
if (isset($_GET['ref_prod'])){
	$produitC=new ProduitC();
    $result=$produitC->recupererProduit($_GET['ref_prod']);
	foreach($result as $row){
		$ref_prod=$row['ref_prod'];
		$nom_prod=$row['nom_prod'];
		$quantite=$row['quantite'];
		$description_prod=$row['description_prod'];
		$disponibilite=$row['disponibilite'];
		$prix_prod=$row['prix_prod'];
		$cat=$row['cat'];
?>
<form method="POST">
<table>
<caption>Modifier Produit</caption>
<tr>
<td>Reff Produit</td>
<td><input type="number" name="ref_prod" value="<?PHP echo $ref_prod ?>"></td>
</tr>
<tr>
<td>Nom Produit</td>
<td><input type="text" name="nom_prod" value="<?PHP echo $nom_prod ?>"></td>
</tr>
<tr>
<td>Quantite</td>
<td><input type="number" name="quantite" value="<?PHP echo $quantite ?>"></td>
</tr>
<tr>
<td>Description Produit</td>
<td><input type="text" name="description_prod" value="<?PHP echo $description_prod ?>"></td>
</tr>
<tr>
<td>Disponibilite Produit</td>
<td><input type="number" name="disponibilite" value="<?PHP echo $disponibilite ?>"></td>
</tr>
<tr>
<td>Prix Produit</td>
<td><input type="number" name="prix_prod" value="<?PHP echo $prix_prod ?>"></td>
</tr>
<tr>
<td>Categorie</td>
<td><input type="texte" name="cat" value="<?PHP echo $cat ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="ref_prod_ini" value="<?PHP echo $_GET['ref_prod'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new produit($_POST['ref_prod'],$_POST['nom_prod'],$_POST['quantite'],$_POST['description_prod'],$_POST['disponibilite'],$_POST['prix_prod'],$_POST['cat']);
	$produitC->modifierProduit($produit,$_POST['ref_prod_ini']);
	echo $_POST['ref_prod_ini'];
	header('Location: afficherProduit.php');
}
?>


</body>
</html>

