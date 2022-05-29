<?php
$result = include("login.php");

if ($result){
    echo ("user found");
}
else{
    echo ("user not found");
}

?>