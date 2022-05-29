<?php
include("connection.php");
$query = $mysqli->prepare("SELECT * from users");
$query->execute();
$arrayusers = $query->get_result();
$response = [];
while($users = $array->fetch_assoc()){
    $response[] = $users;
} 
$json = json_encode($response);
echo $json;
?>