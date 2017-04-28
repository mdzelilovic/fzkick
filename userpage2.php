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
        <div id="myactivities">
            
            <table>
                <tr>
                    <th>Erstellte Aktivitäten</th>
                </tr>
                
                    <?php
                    include 'php_exec/db_connect.php';
                    $row = "SELECT * FROM activity where username = '" . $_SESSION['username'] . "'";
                    $quer = mysql_query($row);
                    while($row1 = mysql_fetch_assoc($quer)){
                        
    
                        echo "<tr>";
                        echo "<td>"; 
                        echo '<a href="activity_fullsite.php?auswahl='.$row1['id'].'">';
                        echo $row1['bezeichnung'];
                        echo '</a>';
                        "</td>";
                        echo "<td>" .$row1['plz']. "</td>";
                        echo "<td>" .$row1['ort']. "</td>";
                        echo "</tr>"; 
                       
                    }
                    
                    ?>
                
            </table>
            
            
            <table>
                <tr>
                    <th>Teilnahme an Aktivitäten</th>
                    
                </tr>
                
                <?php
                
                $rowteilnahme = "SELECT * FROM teilnahmen where username = '" . $_SESSION['username'] . "'";
                $querteilnahme = mysql_query($rowteilnahme);
                while($row2teilnahme = mysql_fetch_assoc($querteilnahme)){
                    $teilnahmenid = $row2teilnahme['id'];
                    $rowselectdata = "SELECT * FROM activity where id = '" . $teilnahmenid . "'";
                    $querselectdata = mysql_query($rowselectdata);
                    while($row2selectdata = mysql_fetch_assoc($querselectdata)){
                        echo "<tr>";
                        echo "<td>" . $row2selectdata['bezeichnung']. "</td>";
                        echo "<td>" . $row2selectdata['plz']. "</td>";
                        echo "<td>" . $row2selectdata['ort']. "</td>";
                        echo "</tr>";
                    }
                }
                
                ?>
                
            </table>
                
                
                
            </table>
            
        </div> 
        
        
        
    </body>
</html>


