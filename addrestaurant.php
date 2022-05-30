<?php
header('Access-Control-Allow-Origin:*');
include("connection.php");
$name = $_POST["name"];
$description = $_POST["description"];
$restopic = $_POST["piclink"];
$address = $_POST["address"];
$category = $_POST["categories_id"];
for($i=0; $i<count($name); $i++){
$query = $mysqli->prepare("INSERT INTO restaurants(name, description , piclink, address, categories_id) VALUES (?, ?, ?, ?, ?)");
$query->bind_param("ssssi", $name[$i], $description[$i], $restopic[$i], $address[$i], $category[$i]);
$query->execute();
}

?>