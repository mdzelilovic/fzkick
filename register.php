
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
        <title>Register</title>
    </head>
    
    <body>
        
        
     <div id="wrapper">
         
         <div id="kopfzeile">
                <ul id="navigation_kopfzeile_index">
                    <li><a href="about.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="about.php">Contact</a></li> 
                    <li><a href="about.php">Impresum</a></li>
                    <li><a href="login.php">Login</a></li> 
                    <li><a href="register.php">Registrieren</a></li>
                </ul>
                <p class="clear_all"></p>
            </div>
         
          <div id="background_register">    </div>
        
        <form id="formular" action="php_exec/register_c.php" method="post">
            
            <fieldset>
                <p> <label for="vorname">Vorname:</label>
                    <input type="text" name="vorname" id="vorname" maxlength="30"></p>
            
            <p><label for="nachname">Nachname:</label>
            <input type="text" name="nachname" id="nachname" maxlength="30"></p>
            
           <p> <label for="ort">Ort:</label>
            <input type="text" name="ort" id="ort" maxlength="30"></p>
            
           <p> <label for="plz">PLZ:</label>
            <input type="text" name="plz" id="plz" maxlength="4"></p>
            
            <p> <label for="username">username:</label>
            <input type="text" name="username" id="username" maxlength="30"></p>
            
            <p> <label for="password">Password:</label>
             <input type="password" name="password" id="password" maxlength="30"></p>
            <br>
             <button type="reset">Zurücksetzten</button>
             <button type="submit">Bestätigen</button>
            
            </fieldset>
        </form>
            
     </div>
        
    </body>
    
</html>