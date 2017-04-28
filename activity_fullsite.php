<?php

session_start();
if(!isset($_SESSION["login"]) && $_SESSION["login"] !== "ok"){
    header("Location: index.php");
}

include 'php_exec/db_connect.php';

$a = htmlspecialchars($_GET["auswahl"]);
echo $a;

?>

<!doctype html>

<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="style.css">
        <title>Wilkommen bei freizeitkick</title>
    </head>
    
    <body>
        
   
<?php
$row = "SELECT * FROM activity where id = '$a'";
$quer = mysql_query($row);

while($row1 = mysql_fetch_array($quer)){

    echo "<table>";
    echo "<tr>";
    
    echo "<th>" . $row1["bezeichnung"] . "</th>";
    echo "<tr>";
    echo "<th>" . $row1["plz"] . "</th>";
    echo "<th>" . $row1["ort"] . "</th>";
    echo "<th>" . $row1["adresse"] . "</th>";
    echo "</table>";

}

$checkifexistent = "SELECT id FROM teilnahmen where username = '" . $_SESSION['username'] . "' AND id = '$a'";
$checkquery = mysql_query($checkifexistent);



?>
        <?php
        if(mysql_num_rows($checkquery) == 0){
        ?>
        <form action="php_exec/teilnehmer_check.php" method="post">
            <input type="hidden" name="userdoes" value="<?php echo $_SESSION["username"]; ?>">
            <input type="hidden" name="doesid" value="<?php echo $a; ?>">
            <input type="submit" value="submit">    
        </form>
    <?php
        }
        ?>
        
    </body>
</html>


