
<?php
echo"<header >";
echo"<center>";
echo"<h1>EMPRESA<h1>";
echo"</center>";
echo"</header>";


echo"<style type='text/css'>";
echo"table.p2{background-color:white; left: 50px; position: relative;  margin-top: -100px;}";
echo" main{background-color:#5D98E9;padding: 15%;}";
echo" h3{margin-left: -40px; }";
echo"</style>";
echo"<main>";
     echo"<center>";
$xid=$_REQUEST['xid'];
$tnombre=$_REQUEST['tnom'];   
$ciudad=$_REQUEST['tciu'];   
 
$con = pg_connect("host=localhost dbname=empresa port=5432 user=postgres password=uajms") or die ("error de conexion"
. pg_last_error());   
$res = pg_exec($con, "SELECT * FROM articulos WHERE t='$xid'");   
$filas = pg_num_rows($res);  
 if ($filas > 0) {     
    // graba registro ////////////////////////     
    $res=pg_exec($con,"UPDATE articulos SET  tnombre='$tnombre', ciudad='$ciudad' WHERE t='$xid'");     
       // despliega registro ////////////////////     
       echo "<center><table border=1 cellspacing=0 cellpadding=16  width=80% bgcolor='#F5F8FB' class='p2'> "  
       ."<tr ><th colspan=2>  DATOS GUARDADOS "  
       ."<tr ><td>id_pe</td><td>$xid"  
       ."<tr ><td>Titulo</td><td>$tnombre"  
       ."<tr ><td>Director</td><td>$ciudad" ; 
       echo "</table>";
       } else {  
           echo"CODIGO NO EXISTE";  
         }
         echo "<br><A href='index.php'> inicio..... </A>"; 
         echo"</center>"; 
         echo"</main>";
         
?> 