<?php
include 'db_connect.php';
$vorname = htmlspecialchars(trim($_POST['vorname']));
$nachname = htmlspecialchars(trim($_POST['nachname']));
$ort = htmlspecialchars($_POST['ort']);
$plz = htmlspecialchars($_POST['plz']);
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

if(!isset($vorname)){
    echo "Vorname nicht gesetzt";
}
elseif(!isset($nachname)){
    echo "Nachname nicht gesetzt";
}
elseif(!isset($ort)){
    echo "Ort nicht gesetzt";
}
elseif(!isset($plz)){
    echo "PLZ nicht gesetzt";
}
elseif(!isset($username)){
    echo "Username nicht gesetzt";
}
elseif(!isset($password)){
    echo "Password nicht gesetzt";
}

else{
    $sql = 'INSERT INTO registrierung (vorname, nachname, ort, plz) '
            . 'VALUES ("' .$vorname.'", "' .$nachname.'", "'.$ort.'", "'.$plz.'")';
    
    $eintragen = mysql_query($sql) or die ("Fehler: " .mysql_error());
    
    $sql1 = "INSERT INTO logincredentials (username, password) VALUES('$username', '$password')";
    $eintragen2 = mysql_query($sql1) or die("Fehler:" .mysql_error());
    
    echo "<h1> Sie haben sich erfolgreich registriert </h1>";
    echo "<br>";
    echo "<a href=userpage.php>Jetzt starten </a>";
    
}
?>
    


