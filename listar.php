<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2014
 */
$sql="select * from alumno";
$cone=mysql_connect("localhost","root","");
mysql_selectdb("test",$cone);
$registros=mysql_query($sql,$cone);
echo "<table border=1>";
while($reg=mysql_fetch_array($registros)){
    echo "<tr>";
    echo "<td>".$reg[0]."</td>";
    echo "<td>".$reg[1]."</td>";
    echo "<td>".$reg[2]."</td>";
    echo "</tr>";
}
echo "</table>";


?>