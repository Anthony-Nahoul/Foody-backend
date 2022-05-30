<?php
include("connection.php");

$id = $_GET["id"];

$query = $mysqli->prepare("SELECT piclink from restaurants where id = ?");
$query->bind_param("i", $id);
$query->execute();
$arraypics = $query->get_result();
$response = [];
$file_path = 'C:\Users\batou\OneDrive\Desktop\Foody\assets';
while($profilepic = $arraypics->fetch_assoc()){
    $response[] = $profilepic;
} 
$json = json_encode($response);
echo $json;


?>