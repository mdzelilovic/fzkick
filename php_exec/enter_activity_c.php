
<?php
session_start();
if(!isset($_SESSION["login"]) && $_SESSION["login"] !== "ok"){
    header("Location: index.php");
}
   

include 'db_connect.php';

$plz = htmlspecialchars($_POST['plz']);
$ort = htmlspecialchars($_POST['ort']);
$adresse = htmlspecialchars($_POST['adresse']);
$activity = htmlspecialchars($_POST['activities']);
$bezeichnung = htmlspecialchars($_POST['bezfreizeit']);
$equipment = htmlspecialchars($_POST['ausruestung']);
$teilnehmer = htmlspecialchars($_POST['anzahl']);
$kosten = htmlspecialchars($_POST['kosten']);
$sonstiges = htmlspecialchars($_POST['sonstiges']);
$user_id = $_SESSION["username"];


$raw = "INSERT INTO activity (plz, ort, adresse, activity, bezeichnung, equipment, teilnehmer, kosten, zusatz, username) VALUES ('$plz', '$ort', '$adresse', '$activity', '$bezeichnung', '$equipment', '$teilnehmer', '$kosten', '$sonstiges', '$user_id')";
$eintragen = mysql_query($raw) or die("Fehler:" .mysql_error());

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

