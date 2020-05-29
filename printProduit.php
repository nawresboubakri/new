<?php 
include "../../core/produitC.php";
$produitC=new ProduitC();
$listeproduit=$produitC->afficherProduits();?>

 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Liste des produits</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
<img
    src="graphique.png" 
    
    height="75px" 
    width="75px" 
/>
                <h3 align="center">Liste des produits</h3><br />  
                <div class="table-responsive">  
                  <div id="Table">
                     <table class="table table-bordered">  
                          <tr >  
                             <th width="25%">R°</th> 
                             <th width="10%">Image</th>   
                <th width="10%">Produit</th>  
                <th width="10%">Catégorie</th>  
                <th width="10%">Prix</th>  
                <th width="20%">Description</th>  
                <th width="10%">Quantité</th>  
                <th width="10%">Public</th>  
                          </tr>  
                    


<tr>
  
                     <?php  
                   // echo fetch_data(); 
                    $produitC1=new ProduitC();
$liste=$produitC1->afficherProduits();
                
                                      foreach($liste as $row){
                                     ?>
                                            <td><img src ="<?php echo $row['src']?>"style="width:50px;height:50px;border-radius;:500px;" alt="" /><br/></td>
                                            <td><?PHP echo $row['ref_prod']; ?></td>
                                            <td><?PHP echo $row['nom_prod']; ?></td>
                                            <td><?PHP echo $row['cat']; ?></td>

                                            <td><?PHP echo $row['prix_prod']; ?></td>
                                            <td><?PHP echo $row['description_prod']; ?></td>

                                            <td><?PHP echo $row['quantite']; ?></td>
                                             <td><?PHP echo $row['sexe']; ?></td>
                                          
                                            <td><?PHP echo $row['disponibilite']; ?></td>
                                   

</tr>
                   
                                      <?php     
                                       } ?>         
                     </table> 
                     </div> 
                     <br />  
                     
                   <div>
                 <br>

                    

                     <div style="transform: translate(60%,50%);"> 
                     
                           </div> 
                            
                   <div style="transform: translate(85%,-120%);">       
                <input type="submit" name="Imprimer" onclick="PrintDiv();" class="btn btn-danger" value="Imprimer" /> 
                </div> 
                </div>
                   
                      
                     
                     
                     
                </div>  
           </div>  
      </body>  
      
      <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('Table');
       var popupWin = window.open('', '_blank', 'width=900,height=700');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
 </html>  