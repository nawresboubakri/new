<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "projet-web-2");
$output = '';
//if(isset($_POST["export"]))
//{
 $query = "SELECT * FROM produit";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>R°</th>
                         <th>Nom</th>  
                         <th>Catégorie</th>  
                         <th>Description</th>  
                          <th>Prix</th>
                          <th>Public</th>
       
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["ref_prod"].'</td>  
                         <td>'.$row["nom_prod"].'</td>  
                         <td>'.$row["cat"].'</td>  
                           <td>'.$row["description_prod"].'</td> 
                             <td>'.$row["prix_prod"].'</td> 
                           <td>'.$row["sexe"].'</td>  
     
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
//}
?>
