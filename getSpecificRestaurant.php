<?php

include("connection.php");
$id = $_POST["id"];
$query = $mysqli->prepare("SELECT * from restaurants where id = ?");
$query->bind_param("i", $id);
$query->execute();
$arraypics = $query->get_result();
$response = [];
while($profilepic = $arraypics->fetch_assoc()){
    $response[] = $profilepic;
} 
$json = json_encode($response);
echo $json;

?>