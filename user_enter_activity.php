<?php
session_start();
if(!isset($_SESSION["login"]) && $_SESSION["login"] !== "ok"){
    header("Location: index.php");
}
    ?>

<!doctype html>

<html>
    <head>
  
        <link rel="stylesheet" href="style.css">
        <title>search_activities</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="kopfzeile_userpage">
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
            </div>
        
        <form id="formular" action="php_exec/enter_activity_c.php" method="post">
            <fieldset>
            <p><label for="plz">PLZ:</label>
                <input type="number" name="plz" id="plz"></p>
            <p><label for="ort">Ort:</label>
                <input type="text" name="ort" id="ort"></p>
            <p><label for="adresse">Adresse:</label>
                <input type="text" name="adresse" id="adresse"></p>
              <p><label>Aktivität:
                    <select name="activities">
                        <option>Bergsport</option>
                        <option>Radsport</option>
                        <option>Turnsport</option>
                        <option>Kampfsport</option>
                        <option>Ballsport</option>
                        <option>Kraftsport</option>
                        <option>Motorsport</option>
                        <option>Wintersport</option>
                        <option>Denksport</option>
                        <option>Wassersport</option>
                        <option>Schießsport</option>
                        <option>Tanzen</option>
                        <option>Indoor</option>
                        <option>sonstiges</option>
                    </select></label></p>
                    <p><label for="bezfreizeit">Freizeit-Bezeichnung:</label>
                        <input type="text" name="bezfreizeit" id="bezfreizeit"></p>
                    <p><label for="ausruestung">Ausrüstung:</label><br>
                <textarea id="ausruestung" name="ausruestung"></textarea></p>
            <p><label for="anzahl">Max Teilnehmer:</label>
            <input type="number" id="anzahl" name="anzahl"></p>
            <p><label for="kosten">Kosten:</label>
                <input type="number" id="kosten" name="kosten"></p>
            <p><label for="sonstiges">Zusatzinformationen:</label><br>
                <textarea name="sonstiges" id="sonstiges" ></textarea></p>
            
            <p><label for="submit"></label>
                <button type="submit" name="submit" id="submit">Absenden</button></p>
            
          
            </fieldset>  
            
        </form>
        
        </div>
    </body>
</html>



