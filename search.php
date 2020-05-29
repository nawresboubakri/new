<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `commandes` WHERE CONCAT(`ref_cmd`, `ref_prod`, `username`, `categorie`,`prix_total`,`jour_arrivee`,`mod_paiement`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    header('Location: table-panier.php');
    
}
// else {
   // $query = "SELECT * FROM `commandes`";
   // $search_result = filterTable($query);
//}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "projet-web");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>