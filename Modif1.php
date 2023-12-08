
<?php
echo"<header >";
echo"<center>";
echo"<h1>EMPRESA<h1>";
echo"</center>";
echo"</header>";


echo"<style type='text/css'>";
echo" main{background-color:#5D98E9;padding: 15%;}";
echo" h3{margin-left: -40px; }";
echo"</style>";



echo"<main>";
     echo"<center>";
$id=$_REQUEST['idpe'];
$con = pg_connect("host=localhost dbname=empresa port=5432 user=postgres password=uajms") or die ("error de conexion". pg_last_error()); 
$res = pg_exec($con,"SELECT * FROM articulos WHERE t='$id'"); 
$filas = pg_num_rows($res); 
 if ($filas>0) {    
    // si existe alguno     
    $datos = pg_fetch_object($res,0);  
     // lee registro cero     
     require("Modif2.php");  
  } else {      echo"USUARIO NO EXISTE";   
 }  
 echo"</center>";
 echo"</main>";
?> 