<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine:400,300italic,600">
        <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet"> 
        <link rel="stylesheet" href="style.css">
        <title>Frezeit-Kick</title>
        <style>
            .fehler {color: red;}
        </style>
    </head>
    <body>
        <div id="formular_login">
        <?php
        if (isset($_GET["f"]) && $_GET["f"] == 1){
            echo "<p class='fehler'>Login-Daten nicht korrekt!!</p>";         
        }       
        ?>
        
        
            <form method="POST" action="php_exec/login_check.php">

            <p>
            <label for= "username"> Username: </label>
            <input name="username"></p>
            
            <p>
            <label for="passwort:"> Passwort: </label>
            <input name="password" type=password> </p>
<br>
<input id="login_submit" type=submit name=submit value="Einloggen">
<br>

<a href="passwort_vergessen.php">Passwort vergessen?</a>
</form>
        </div>   
        
        
    </body>
</html>



