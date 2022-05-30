<?php
header('Access-Control-Allow-Origin:*');

include("connection.php");
$query = $mysqli->prepare("SELECT * from categories");
$query->execute();
$arraycategories = $query->get_result();
$response = [];
while($category = $arraycategories->fetch_assoc()){
    $response[] = $category;
} 
$json = json_encode($response);
echo $json;

?>