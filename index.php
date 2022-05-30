<?php
header('Access-Control-Allow-Origin:*');

include("connection.php");

$categoryname = $_GET["categoryname"];

$query = $mysqli->prepare("SELECT id from categories where categoryname = ?");
$query->bind_param("s", $categoryname);
$query->execute();
$arraypics = $query->get_result();
$response = [];
while($profilepic = $arraypics->fetch_assoc()){
    $response[] = $profilepic;
} 
$json = json_encode($response);
echo $json;


?>