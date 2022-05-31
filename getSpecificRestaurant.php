<?php

include("connection.php");
$id = $_POST["id"];
$query = $mysqli->prepare("SELECT r.name, r.description, r.address, c.categoryname from restaurants r inner join categories c on r.categories_id = c.id where r.id= ?");
$query->bind_param("i", $id);
$query->execute();
$array = $query->get_result();
$response = [];
while($restaurant = $array->fetch_assoc()){
    $response[] = $restaurant;
} 
$json = json_encode($response);
echo $json;

?>