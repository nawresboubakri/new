<?PHP
class Categorie{
	private $cat;
	private $ref_cat;
	private $generation;
	private $marque;
	private $size;
	private $couleur;
	private $stock;


	function __construct($catt,$reff,$gen,$mrq,$size,$col,$stock){
		$this->cat=$catt;
		$this->ref_cat=$reff;
		$this->generation=$gen;
		$this->marque=$mrq;
		$this->size=$size;
		$this->couleur=$col;
		$this->stock=$stock;
		
	}
	
	function getCategorie(){
		return $this->cat;
	}
	function getReff_cat(){
		return $this->ref_cat;
	}
	function getGeneration(){
		return $this->generation;
	}
	function getMarque(){
		return $this->marque;
	}
	function getSize(){
		return $this->size;
	}
	function getCouleur(){
		return $this->couleur;
	}
	function getStock(){
		return $this->stock;
	}
	

	function setCategorie($catt){
		$this->cat=$catt;
	}
	function setReff_cat($reff){
		$this->ref_cat=$reff;
	}

	function setGeneration($gen){
		$this->generation=$gen;
	}
	function setMarque($mrq){
		$this->marque=$mrq;
	}
	function setSize($size){
		$this->size=$size;
	}
	function setCouleur($col){
		$this->couleur=$col;
	}
	function setStock($stock){
		$this->stock=$stock;
	}
	
	
}

?>