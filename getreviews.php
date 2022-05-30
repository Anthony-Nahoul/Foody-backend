<?php
header('Access-Control-Allow-Origin:*');

include("connection.php");
$query = $mysqli->prepare("SELECT * from reviews");
$query->execute();
$arrayreviews = $query->get_result();
$response = [];
while($reviews = $arrayreviews->fetch_assoc()){
    $response[] = $reviews;
} 
$json = json_encode($response);
echo $json;
?>