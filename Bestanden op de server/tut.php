<?php
    $dBConnect = mysql_connect('127.0.0.1', 'robotarm', '$_Rbrm2015') or die(mysql_error());
    //    echo "Connected to MySQL<br />";
    mysql_select_db("robotarm") or die(mysql_error());
    //    echo "Connected to Database";
	
	$query2 = "SELECT * FROM robotarm_testJD.waarden";

    $resultaatMessage2 = @mysql_query($query2, $dBConnect) OR DIE ("Selecteren lukt niet");

    echo "<table width='50%' border='1'>";
    echo "<tr><th>ID</th><th>X</th><th>Y</th><th>Z</th></tr>";

    //data uit database halen en weergeven
    while (($row2 = mysql_fetch_array($resultaatMessage2)) !== FALSE)
    {
        print(json_encode($row2['waardeY']);
    } 
    echo '</table>';

    mysql_free_result($resultaatMessage);
    mysql_close($dBConnect);
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Data uit accelerometer</title>
    </head>
    <body>
        <?php
            //Hier php
        ?>   
        <!--Hier HTML-->
    </body>
</html>