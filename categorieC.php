<?PHP
include "../../config1.php";

include "../../config2.php";
//include "bib.php";
class CategorieC {
function afficherCategorie ($categorie){
		echo "cat: ".$categorie->getCategorie()."<br>";
		echo "ref_cat: ".$categorie->getReff_cat()."<br>";
		echo "generation: ".$categorie->getGeneration()."<br>";
		echo "marque: ".$categorie->getMarque()."<br>";
		echo "size: ".$caegoriet->getSize()."<br>";
		echo "couleur: ".$categorie->getCouleur()."<br>";
		echo "stock: ".$categorie->getStock()."<br>";
		
	}
	
	function ajouterCategorie($categorie){
		$sql="insert into categorie (cat,ref_cat,generation,marque,size,couleur,stock)
 values (:cat,:ref_cat,:generation,:marque,:size,:couleur,:stock)";
		$db = config2::getConnexion();
		try{
        $req=$db->prepare($sql);
        $cat=$categorie->getCategorie();
        $ref_cat=$categorie->getReff_cat();
        $generation=$categorie->getGeneration();
        $marque=$categorie->getMarque();
        $size=$categorie->getSize();
        $couleur=$categorie->getCouleur();
        $stock=$categorie->getStock();
       

		$req->bindValue(':cat',$cat);
		$req->bindValue(':ref_cat',$ref_cat);
		$req->bindValue(':generation',$generation);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':size',$size);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':stock',$stock);
		
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCategories(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie  inner join produit  on categorie.cat on produit.cat";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCategorie($ref_cat){
		$sql="DELETE FROM categorie where ref_cat= :ref_cat";
		$db = config1::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ref_cat',$ref_cat);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function modifierCategorie($categorie,$ref_cat){
		$sql="UPDATE categorie SET cat=:cat,ref_cat=:ref_catt, generation=:generation,marque=:marque,size=:size,couleur=:couleur,stock=:stock WHERE ref_cat=:ref_cat";
		
		$db = config1::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cat=$categorie->getCategorie();

		$ref_catt=$categorie->getReff_cat();

        $generation=$categorie->getGeneration();
        $marque=$categorie->getMarque();
        $size=$categorie->getSize();
        $couleur=$categorie->getCouleur();
        $stock=$categorie->getStock();
    

		$datas = array(':cat'=>$cat, ':ref_catt'=>$ref_catt, ':ref_cat'=>$ref_cat, ':generation'=>$generation,':marque'=>$marque,':size'=>$size,':couleur'=>$couleur,':stock'=>$stock);
		$req->bindValue(':cat',$cat);
		$req->bindValue(':ref_catt',$ref_catt);
		$req->bindValue(':ref_cat',$ref_cat);
		$req->bindValue(':generation',$generation);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':size',$size);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':stock',$stock);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recupererCategorie($cat){
		$sql="SELECT * from categorie where cat like'$cat'";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeCategorie($mrq){
		$sql="SELECT * from categorie where cat=$mrq";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
  function trierCategories($c)
    {
      	
	  if ($c == "ref_cat") $sql = "SELECT * from categorie order by ref_cat desc";
      else if ($c == "stock") $sql = "SELECT * from categorie order by stock desc";
      else if ($c== "cat") $sql = "SELECT * from categorie order by cat desc";
	  
	  $db = config1::getConnexion();
	        
		    $result = $db->prepare($sql);
         $result->bindValue(1, "%$c%", PDO::PARAM_STR);
         $result->execute();
           return $result->fetchAll();


    }
}


