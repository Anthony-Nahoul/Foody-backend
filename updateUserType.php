<?php
header('Access-Control-Allow-Origin:*');

include("connection.php");
$type = $_POST["type"];
$id = $_POST["id"];
$query = $mysqli->prepare("UPDATE users set type= ? WHERE id= ?");
$query->bind_param("si", $type, $id); 
$query->execute();
$response = [];
$response["success"] = true;

echo json_encode($response);

?>