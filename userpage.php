<?php
session_start();
if(!isset($_SESSION["login"]) && $_SESSION["login"] !== "ok"){
    header("Location: index.php");
}
    ?>

<!doctype html>

<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="style.css">
        <title>Wilkommen bei freizeitkick</title>
    </head>
    
    <body>
        <div id="wrapper">
            <div id="kopfzeile_userpage">
                  
                <a href="userpage2.php" style="color: white;">Meine Aktivitäten</a>
                <div class ="dropdown">
                    <button class="dropbtn">
                       <?php
                echo "<span>{$_SESSION['username']}</span> ";
                
                ?>  
                    </button>
                    <div class="dropdown_c">
                        <a href="einstellungen.php">Einstellungen</a>
                        <a href="einstellungen.php">Anzeige erstellen</a>
                        <a href="einstellungen.php">Anzeige bearbeiten</a>
                        
                    </div>
                    
                </div>
                <p class="clear_all"></p>
                
            </div>
            
            
            <div id="auswahl">
                
                <div id="auswahl1">
                    <a href="user_search.php" class="search_activity">a</a>
                       
                </div>
             
                <div id="auswahl2">
                    <a href="user_enter_activity.php" class="enteractivity">a</a>
                        
                          
                </div>
             
                
            </div>
            <p class="clear_all"></p>
       
        </div>
        
    </body>
</html>



