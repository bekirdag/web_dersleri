<?php

require_once("inc/db_info.php");

$username = $_POST['username'];
$password = $_POST['password'];


$stmt = $conn->prepare("SELECT uid FROM users WHERE username=:username"); 

$stmt->bindParam(":username", $username, PDO::PARAM_STR);

$is_registered = TRUE;
// Kayıttan önce kullanı adı mevcut mu
if($stmt->execute()){
    if($stmt->rowCount() == 1){
        print "<br>Bu kullanıcı adı kayıtlı";
    } else{
        print "<br>Kullanıcı adı kayıtlı değil";
        $is_registered = FALSE;
    }
} else{
    echo "Oops! Something went wrong. Please try again later.";
}

if(!$is_registered) {
    $stmt = $conn->prepare("INSERT INTO users (username,password) values(:username,:password)"); 

    $password = sha1($password);

    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    $stmt->bindParam(":password", $password, PDO::PARAM_STR);
    
    // Attempt to execute the prepared statement
    if($stmt->execute()){
        if($stmt->rowCount() == 1){
            print "Registration successful";
        } else{
            print "Registration unsuccessful";
        }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
}
