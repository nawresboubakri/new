  <?php  
 function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "projet-web");  
      $sql = "SELECT * FROM club ";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["Nom"].'</td>  
                          <td>'.$row["Categorie"].'</td>  
                          <td>'.$row["Region"].'</td>  
                          <td>'.$row["Adresse"].'</td>  
                          <td>'.$row["Horaire"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Liste des clubs partenaires");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 9);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center"Liste des clubs partenaires</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="25%">Nom</th>  
                <th width="20%">Categorie</th>  
                <th width="10%">Region</th>  
                <th width="20%">Adresse</th>  
                <th width="20%">Horaire</th>  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
 ?>  

 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Liste des clubs partenaires</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  

                <h3 align="center">Liste des clubs partenaires</h3><br />  
                <div class="table-responsive">  
                  <div id="Table">
                     <table class="table table-bordered">  
                          <tr >  
                               <th width="25%">Nom</th> 
                               <th width="20%">Categorie</th>  
                               <th width="10%">Region</th>  
                               <th width="20%">Adresse</th>  
                               <th width="20%">Horaire</th>  
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table> 
                     </div> 
                     <br />  
                     
                   <div>
                     <form method="post"> 
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" /> 
                           </form>
                    

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