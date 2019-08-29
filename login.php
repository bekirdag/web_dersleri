<?php

require_once("inc/db_info.php");

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT uid, username FROM users where username=:username and password=:password"); 

$password = sha1($password);

$stmt->bindParam(":username", $username, PDO::PARAM_STR);
$stmt->bindParam(":password", $password, PDO::PARAM_STR);

// Attempt to execute the prepared statement
if($stmt->execute()){
    if($stmt->rowCount() == 1){
        print "Login successful";
    } else{
        print "Login unsuccessful";
    }
} else{
    echo "Oops! Something went wrong. Please try again later.";
}