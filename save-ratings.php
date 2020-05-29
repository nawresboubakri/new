
<?php

$product_id = $_POST["product_id"];
$ratings = $_POST["ratings"];

$conn = mysqli_connect("localhost", "root", "", "projet-web-2");

mysqli_query($conn, "INSERT INTO ratings (product_id, ratings) VALUES ('$product_id', '$ratings')");


echo "Saved";


?>


