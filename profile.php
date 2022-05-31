<?php

//$result = include("login.php");
include("connection.php");


    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $id = $_POST["id"];
    $password = hash("sha256", $_POST["password"]);
    $query = $mysqli->prepare("UPDATE users set fname='$firstname', lname='$lastname', password='$password' where id = '$id'");

    //$query->bind_param("s", $email); 
    $query->execute();
    //$query->fetch();
    $response = [];
    $response["firstname"] = $firstname;
    $response["lastname"] = $lastname;
    $response["password"] = $password;

    $json = json_encode($response);
    echo $json;


?>