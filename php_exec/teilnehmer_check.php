<?php
session_start();
if(!isset($_SESSION["login"]) && $_SESSION["login"] !== "ok"){
    header("Location: index.php");
}
 include 'db_connect.php';

$userdoes = htmlspecialchars($_POST["userdoes"]);
$doesid = htmlspecialchars($_POST["doesid"]);

echo $userdoes;
echo $doesid;

$quer = "INSERT INTO teilnahmen (username, id) VALUES ('$userdoes', '$doesid')";
$row = mysql_query($quer);




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

