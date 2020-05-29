<?php 

include "../../config.php";

/* ****** Début Classe ProduitC ***** */
class ProduitC {
function afficherProduit ($produit){
		echo "ref_prod: ".$produit->getRef_prod()."<br>";
		echo "nom_prod: ".$produit->getNom_prod()."<br>";
		echo "quantite: ".$produit->getQuantite()."<br>";
		echo "description_prod: ".$produit->getDescription_prod()."<br>";
		echo "disponibilite: ".$produit->getDisponibilite()."<br>";
		echo "prix_prod: ".$produit->getPrix_prod()."<br>";
		echo "cat: ".$produit->getNomCategorie()."<br>";
		echo "src: ".$produit->getSrc()."<br>";
		echo "sexe: ".$produit->getSexe()."<br>";

	}
	
	function ajouterProduit($produit){

        $sql="insert into produit (ref_prod,nom_prod,quantite,description_prod,sexe,disponibilite,prix_prod,cat,src)
 values(:ref_prod,:nom_prod,:quantite,:description_prod,:sexe,:disponibilite,:prix_prod,:cat,:src) " ;
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
       $ref_prod=$produit->getRef_prod();
        $nom_prod=$produit->getNom_prod();
        $quantite=$produit->getQuantite();
        $description_prod=$produit->getDescription_prod();
        $disponibilite=$produit->getDisponibilite();
        $prix_prod=$produit->getPrix_prod();
        $cat=$produit->getNomCategorie();
        $src=$produit->getSrc();
        $sexe=$produit->getSexe();

		$req->bindValue(':ref_prod',$ref_prod);
		$req->bindValue(':nom_prod',$nom_prod);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':description_prod',$description_prod);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':disponibilite',$disponibilite);
		$req->bindValue(':prix_prod',$prix_prod);
		$req->bindValue(':cat',$cat);
		$req->bindValue(':src',$src);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerProduit($ref_prod){
		$sql="DELETE FROM produit where ref_prod= :ref_prod";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ref_prod',$ref_prod);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function modifierProduit($produit,$ref_prod){
		$sql="UPDATE produit SET ref_prod=:reff, nom_prod=:nom_prod,quantite=:quantite,description_prod=:description_prod,sexe=:sexe,disponibilite=:disponibilite,prix_prod=:prix_prod,cat=:cat,src=:src WHERE ref_prod=:ref_prod";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$reff=$produit->getRef_prod();
        $nom_prod=$produit->getNom_prod();
        $quantite=$produit->getQuantite();
        $description_prod=$produit->getDescription_prod();
       
        $disponibilite=$produit->getDisponibilite();
        $prix_prod=$produit->getPrix_prod();
        $cat=$produit->getNomCategorie();
        $src=$produit->getSrc();
        $sexe=$produit->getSexe();

		$datas = array(':reff'=>$reff, ':ref_prod'=>$ref_prod, ':nom_prod'=>$nom_prod,':quantite'=>$quantite,':description_prod'=>$description_prod, ':sexe'=>$sexe,':disponibilite'=>$disponibilite,':prix_prod'=>$prix_prod,':cat'=>$cat,':src'=>$src);
		$req->bindValue(':reff',$reff);
		$req->bindValue(':ref_prod',$ref_prod);
		$req->bindValue(':nom_prod',$nom_prod);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':description_prod',$description_prod);
		$req->bindValue(':sexe',$sexe);
        $req->bindValue(':disponibilite',$disponibilite);
		$req->bindValue(':prix_prod',$prix_prod);
		$req->bindValue(':cat',$cat);
		$req->bindValue(':src',$src);
		
		
           $s=$req->execute();

			
        
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recupererProduit($reff){
		$sql="SELECT * from produit where ref_prod=$reff";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeProduit($catt){
		$sql="SELECT nom_prod,src,prix_prod,ref_prod from produit where cat like '%$catt%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function triProduit($tri,$order){

		$sql="SELECT * from produit order by $tri $order";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	
	}
	/* ---------- TESTER L'EXISTANCE D'UN PRODUIT ---------------- */

  function test($nom)
{
  global $db;
  $db = config::getConnexion();
  $sql = "SELECT COUNT(*) as number FROM produit 
          WHERE nom_prod = '$nom'";
  //$rs = mysqli_query($db, $sql);
          $liste=$db->query($sql);
 // $result = mysqli_fetch_array($rs);
             try{
        $liste=$db->query($sql);
       foreach ($liste as $row ) {
        $number=$row['number'];
       }
        return $number;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  /*$result =
  return $result[0];*/
}
/* ---------- Fin TESTER L'EXISTANCE D'UN PRODUIT ---------------- */

	
}
/* ****** Fin Classe ProduitC ***** */

/* ****** Début Classe CategorieC ***** */
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
		$db = config::getConnexion();
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
		$sql="SElECT * From categorie ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherCategoriesC(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie c inner join produit p on c.cat=p.cat ";
		$db = config::getConnexion();
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
		$db = config::getConnexion();
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
		
		$db = config::getConnexion();
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
function recupererCategorie2($ref_cat){
		$sql="SELECT * from categorie where ref_cat =$ref_cat";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function recupererCategorie($cat){
		$sql="SELECT * from categorie where cat like'$cat'";
		$db = config::getConnexion();
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
		$db = config::getConnexion();
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
	  
	  $db = config::getConnexion();
	        
		    $result = $db->prepare($sql);
         $result->bindValue(1, "%$c%", PDO::PARAM_STR);
         $result->execute();
           return $result->fetchAll();


    }
}
class RatingC {
	function afficherRating ($ratings){
		echo "id: ".$rating->getID()."<br>";
		echo "product_id: ".$rating->getProduct_id()."<br>";
		echo "ratings: ".$rating->getRatings()."<br>";
		
	}
	
	function afficherP($reff){
                $sql="SELECT * FROM ratings WHERE product_id = '" . $reff . "'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function nombre($reff){

          // $sql="SELECT COUNT(*) FROM  ratings WHERE product_id = '" . $reff . "'";
		 //  $sql="SELECT * FROM ratings WHERE product_id = '" . $reff . "'";
		
		  $sql="SELECT count(*) as number FROM  ratings WHERE product_id = '" . $reff . "'";
           $db = config::getConnexion();
           try{
		$liste=$db->query($sql);
       foreach ($liste as $row ) {
       	$number=$row['number'];
       }
		return $number;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	}


/* Like and Dislike */
  $conn = config::getConnexion();
//$conn = mysqli_connect('localhost', 'root', '', 'projet-web-2');
$conn = mysqli_connect('localhost', 'root', '', 'projet-web-2');


$user_id=$_SESSION['email'];




if (!$conn) {
  die("Error connecting to database: " . mysqli_connect_error($conn));
  exit();
}

// if user clicks like or dislike button

if (isset($_POST['action'])) {
 
  $post_id = $_POST['post_id'];
  $action = $_POST['action'];
  switch ($action) {
    case 'like':
        $sql="INSERT INTO rating_info (user_id, post_id, rating_action) 
          
             VALUES ('$user_id', $post_id, 'like') 
             ON DUPLICATE KEY UPDATE rating_action='like'";
         break;
    case 'dislike':
          $sql="INSERT INTO rating_info (user_id, post_id, rating_action) 
               VALUES ('$user_id', $post_id, 'dislike') 
             ON DUPLICATE KEY UPDATE rating_action='dislike'";
         break;
    case 'unlike':
        $sql="DELETE FROM rating_info WHERE user_id ='$user_id' AND post_id=$post_id";
        break;
    case 'undislike':
          $sql="DELETE FROM rating_info WHERE user_id ='$user_id' AND post_id=$post_id";
      break;
    default:
      break;
  }
if($user_id != "")
 {
  // execute query to effect changes in the database ...
  mysqli_query($conn, $sql);
  echo getRating($post_id);
  exit(0);
}


}
 

// Get total number of likes for a particular post
function getLikes($id)
{
  global $conn;
  $sql = "SELECT COUNT(*) FROM rating_info 
        WHERE post_id = $id AND rating_action='like'";
  $rs = mysqli_query($conn, $sql);
  $result = mysqli_fetch_array($rs);
  return $result[0];
}

// Get total number of dislikes for a particular post
function getDislikes($id)
{
  global $conn;
  $sql = "SELECT COUNT(*) FROM rating_info 
        WHERE post_id = $id AND rating_action='dislike'";
  $rs = mysqli_query($conn, $sql);
  $result = mysqli_fetch_array($rs);
  return $result[0];
}

// Get total number of likes and dislikes for a particular post
function getRating($id)
{
  global $conn;
  $rating = array();
  $likes_query = "SELECT COUNT(*) FROM rating_info WHERE post_id = $id AND rating_action='like'";
  $dislikes_query = "SELECT COUNT(*) FROM rating_info 
            WHERE post_id = $id AND rating_action='dislike'";
  $likes_rs = mysqli_query($conn, $likes_query);
  $dislikes_rs = mysqli_query($conn, $dislikes_query);
  $likes = mysqli_fetch_array($likes_rs);
  $dislikes = mysqli_fetch_array($dislikes_rs);
  $rating = [
    'likes' => $likes[0],
    'dislikes' => $dislikes[0]
  ];
  return json_encode($rating);
}

// Check if user already likes post or not
function userLiked($post_id)
{
  global $conn;
  global $user_id;
  $sql = "SELECT * FROM rating_info WHERE user_id ='$user_id'
        AND post_id=$post_id AND rating_action='like'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    return true;
  }else{
    return false;
  }
}

// Check if user already dislikes post or not
function userDisliked($post_id)
{
  global $conn;
  global $user_id;
  $sql = "SELECT * FROM rating_info WHERE user_id like'%$user_id%'
        AND post_id=$post_id AND rating_action='dislike'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    return true;
  }else{
    return false;
  }
}

$sql = "SELECT * FROM produit";
$result = mysqli_query($conn, $sql);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);





class ClientCore {
	function afficherClient ($client){
			
			echo "Nom: ".$client->get_nom()."<br>";
			echo "Prénom: ".$client->get_prenom()."<br>";
			echo "Pseudo: ".$client->get_Pseudo()."<br>";
			
			
			echo "Email: ".$client->get_Email()."<br>";
			echo "Adresse: ".$client->get_Adresse()."<br>";
		
			echo "Mot de passe: ".$client->get_Mdp()."<br>";
			echo "Genre: ".$client->get_Sexe()."<br>";
			echo "vkey: ".$client->get_vkey()."<br>";
			//echo "verified";$client->get_vkey()."<br>";
	
	
		}
		
	
		function ajouterClient($client){
	
			
			
			$sql="insert into  client (Nom,Prenom,Pseudo,email,Adresse,Mdp,Genre,vkey) values (:Nom,:Prenom,:Pseudo,:email,:Adresse,:Mdp,:Genre,:vkey)";
			$db = config::getConnexion();
			try{
			$req=$db->prepare($sql);
			
			$Nom=$client->get_nom();
			$Prenom=$client->get_prenom();
			$Pseudo=$client->get_Pseudo();
			$email=$client->get_Email();
			$Adresse=$client->get_Adresse();
			$Mdp=$client->get_Mdp() ;
			$Genre=$client->get_Sexe() ;
			$Mdpmd5 = md5($Mdp) ;
			$vkey = md5(time()) ;
			$req->bindValue(':Nom',$Nom);
			$req->bindValue(':Prenom',$Prenom);
			$req->bindValue(':Pseudo',$Pseudo);
			$req->bindValue(':email',$email);
			$req->bindValue(':Adresse',$Adresse);
			$req->bindValue(':Mdp',$Mdpmd5);
			$req->bindValue(':Genre',$Genre);
			$req->bindValue(':vkey',$vkey);
	
	
			
				$req->execute();
			   
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
			
		}
		
		function AfficherClients(){
			$sql="SELECT * From client";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function supprimerClient($email){
			$sql="DELETE FROM client where email= :email";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':email',$email);
			try{
				$req->execute();
			   // header('Location: index.php');
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierEmploye($client,$email){
			$sql="UPDATE client SET Nom=:Nom, Prenom=:Prenom,Adresse=:Adresse,Pseudo=:Pseudo ,Mdp=:Mdp WHERE email=:email";
			
			$db = config::getConnexion();
	try{		
			$req=$db->prepare($sql);
			 $Nom=$client->get_nom();
			$Prenom=$client->get_prenom();
			$Pseudo=$client->get_Pseudo();
			$email=$client->get_Email();
			$Adresse=$client->get_Adresse();
			$Mdp=$client->get_Mdp() ;
			$datas = array(':Nom'=>$Nom, ':Prenom'=>$Prenom, ':Pseudo'=>$Pseudo,':Adresse'=>$Adresse,':Mdp'=>$Mdp);
			$req->bindValue(':Nom',$Nom);
			$req->bindValue(':Prenom',$Prenom);
			$req->bindValue(':Pseudo',$Pseudo);
			$req->bindValue(':Adresse',$Adresse);
			$req->bindValue(':Mdp',$Mdp);
			
			
				$s=$req->execute();
				
			   // header('Location: index.php');
			}
			catch (Exception $e){
				echo " Erreur ! ".$e->getMessage();
	   echo " Les datas : " ;
	  print_r($datas);
			}
			
		}
		function recupererEmploye($email){
			$sql="SELECT * from client where email=$email";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function AfficherClients1($e){
			$sql="SELECT * From client where email='$e'  ";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		/*function rechercherListeEmployes($tarif){
			$sql="SELECT * from employe where tarifHoraire=$tarif";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}*/
	}
	class ClubsCore {
		function afficherClub ($club){
				
				echo "Nom:".$club->get_Nom()."<br>";
				echo "Categorie: ".$club->get_Categorie()."<br>";
				echo "Region: ".$club->get_Region()."<br>";
		}
	}

/* ****** Fin Classe CategorieC ***** */

/* ****** Début Classe CommentaireC ***** */

/* ****** Fin Classe CommentaireC ***** */

?>