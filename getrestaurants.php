<?php

include("connection.php");
$query = $mysqli->prepare("SELECT * from restaurants");
$query->execute();
$arrayrestaurants = $query->get_result();
$response = [];
while($restaurants = $arrayrestaurants->fetch_assoc()){
    $response[] = $restaurants;
} 
$json = json_encode($response);
echo $json;
?>