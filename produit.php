<?PHP
class Produit{
	private $ref_prod;
	private $nom_prod;
	private $quantite;
	private $description_prod;
	private $sexe;
	private $disponibilite;
	private $prix_prod;
	private $cat;
	private $src;

	function __construct($ref,$nom,$quant,$description,$sexe,$disp,$prix,$cat,$src){
		$this->ref_prod=$ref;
		$this->nom_prod=$nom;
		$this->quantite=$quant;
		$this->description_prod=$description;
		$this->sexe=$sexe;
		$this->disponibilite=$disp;
		$this->prix_prod=$prix;
		$this->cat=$cat;
		$this->src=$src;
	}
	
	function getRef_prod(){
		return $this->ref_prod;
	}
	function getNom_prod(){
		return $this->nom_prod;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getDescription_prod(){
		return $this->description_prod;
	}
	function getSexe(){
		return $this->sexe;
	}

	function getDisponibilite(){
		return $this->disponibilite;
	}
	function getPrix_prod(){
		return $this->prix_prod;
	}
	function getNomCategorie(){
		return $this->cat;
	}
	function getSrc(){
		return $this->src;
	}
	
	function setRef_prod($reff){
		$this->ref_prod=$reff;
	}
	function setNom_prod($nom){
		$this->nom_prod=$nom;
	}
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	function setDescription_prod($description_prod){
		$this->description_prod=$description_prod;
	}
	function setDisponibilite($disponibilite){
		$this->disponibilite=$disponibilite;
	}
	function setPrix_prod($prix_prod){
		$this->prix_prod=$prix_prod;
	}
	function setNomCategorie($cat){
		$this->cat=$cat;
	}
	function setSrc($src){
		$this->src=$src;
	}
	function setSexe($sexe){
		$this->sexe=$sexe;
	}
	
	
}

?>