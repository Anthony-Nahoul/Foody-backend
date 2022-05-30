<?php

include("connection.php");
$restaurantid = $_POST["restaurantid"];
$query = $mysqli->prepare("SELECT count(id), avg(value) from rates where restaurants_id  = ?");
$query->bind_param("i", $restaurantid);
$query->execute();
$array = $query->get_result();
$response = [];
while($restorate = $array->fetch_assoc()){
    $response[] = $restorate;
} 
$json = json_encode($response);
echo $json;

?>