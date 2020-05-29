
<?php 
class ratings{
    
    private $id ;
    private $product_id;
    private $ratings;
   
function __construct($id,$product_id,$ratings){
   
    $this->id=$id;
    $this->product_id=$product_id;
    $this->ratings=$ratings;

   
}

function getID(){
    return $this->id;
}
function getProduct_id(){
    return $this->product_id;
}
function getRatings(){
    return $this->ratings;
}


function setID($id){
    $this->id=$id;
}
function setProduct_id($rate){
    $this->product_id=$rate;
}
function setRatings($rate){
    $this->ratings=$rate;
}


}
?>