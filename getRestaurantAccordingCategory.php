<?php
header('Access-Control-Allow-Origin:*');

include("connection.php");
$id = $_POST["id"];
$query = $mysqli->prepare("SELECT piclink, name from restaurants where categories_id  = ?");
$query->bind_param("i", $id);
$query->execute();
$array = $query->get_result();
$response = [];
while($resto = $array->fetch_assoc()){
    $response[] = $resto;
} 
$json = json_encode($response);
echo $json;

?>