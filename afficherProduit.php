<?PHP
include "../../core/produitC.php";
$produit1C=new ProduitC();
$listeProduits=$produit1C->afficherProduits();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>reff</td>
<td>Nom produit</td>
<td>quant</td>
<td>description</td>
<td>disponibilite</td>
<td>prix produit</td>
<td>categorie</td>
<td>image</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeProduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['ref_prod']; ?></td>
	<td><?PHP echo $row['nom_prod']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['description_prod']; ?></td>
	<td><?PHP echo $row['disponibilite']; ?></td>
	<td><?PHP echo $row['prix_prod']; ?></td>
	<td><?PHP echo $row['cat']; ?></td>
	<!--<td><?PHP echo $row['src']; ?></td>-->
	<td><img src ="<?php echo $row['src']?>"style="width:200px;height:150px;border-radius;:500px;" alt="" /><br/></td>
	<td>
        <form method="POST"
              action="supprimerProduit.php">
	<input type="submit" name="supprimer"
           value="supprimer">
	<input  value="<?PHP echo $row['ref_prod']; ?>" name="ref_prod">
	    </form>
	</td>
    <td><a href="modifierProduit.php?ref_prod=<?PHP echo $row['ref_prod']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


