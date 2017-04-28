<?php

$host = "localhost";
$user = "root";
$passwort = "";
$database = "freizeit-kick";

mysql_connect($host, $user, $passwort) or die
("Keine Verbindung möglich");
mysql_select_db($database) or die ("Die Datenbank existiert nicht");

?>
    