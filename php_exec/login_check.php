<?php

session_start();
include 'db_connect.php';
if(isset($_POST["username"]) && $_POST["username"]) {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    
    $checkPerson = mysql_query("SELECT username FROM logincredentials WHERE username = '$username' AND password = '$password' LIMIT 1");
    
    if(mysql_num_rows($checkPerson) >0 ){
        $_SESSION["username"] = $username;
        $_SESSION["login"] = "ok";
        $extra = "userpage.php";
    }
    else {
        $extra = "login.php?f=1";
    }
}
else{
    $extra = "login.php?f=1";
}

header("Location: http://localhost/freizeitkick/$extra");


?>

