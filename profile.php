<?php

$result = include("login.php");
include("connection.php");

if ($result){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = hash("sha256", $_POST["password"]);
    $query = $mysqli->prepare("UPDATE users set fname=$firstname, lname=$lastname, email=$email, password=$password where email = ? ");

    $query->bind_param("s", $email); 
    $query->execute();
    //$query->fetch();
    $response = [];
    $response["fname"] = $firstname;
    $response["lname"] = $lastname;
    $response["email"] = $email;
    $response["password"] = $password;

    $json = json_encode($response);
    echo $json;

}
else{
    echo ("user not found");
}

?>