<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2014
 */
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$edad=$_POST["edad"];
$cone=mysql_connect("localhost","root","");
$sql="insert into alumno values($id,'$nombre',$edad)";
mysql_select_db("test",$cone);
$resp=mysql_query($sql,$cone);
    if($resp==1){
      echo "Grabado";      
    }
    else
    {
      echo "No Grabo";      
    }

?>