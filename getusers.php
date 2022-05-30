<?php
header('Access-Control-Allow-Origin:*');

include("connection.php");
$query = $mysqli->prepare("SELECT * from users");
$query->execute();
$arrayusers = $query->get_result();
$response = [];
while($users = $arrayusers->fetch_assoc()){
    $response[] = $users;
} 
$json = json_encode($response);
echo $json;
?>