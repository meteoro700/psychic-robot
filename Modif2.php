
<?php
echo"<style type='text/css'>";
echo"table.p2{background-color: white ; left: 50px; position: relative;  margin-top: -100px;}";
echo"</style>";
     echo"<center>";
echo"<form method=post action='Modif3.php'><center>"      
."<table border=1 cellspacing=0 cellpadding=16  width=80% bgcolor='#F5F8FB' class='p2'>" 
."<tr ><th colspan=2>MODIFICANDO DATOS..... "  
."<tr ><td>Codigo</td><td>$id<input type=hidden name=xid value='$id'>"  
."<tr ><td>Nombre</td><td><input type=text name=tnom value='$datos->tnombre'>"; 
    echo "<tr ><td>Ciudad</td><td><input type=text name=tciu value='$datos->ciudad' >" 
     ."</table>" 
      ."<br><input type=submit value=Enviar>" 
      ."<input type=reset value=Limpiar>"  
     ."</center></form>";
     
     echo"</center>";
     echo "<br><A href='index.php'> inicio..... </A>";
     echo"</main>";
     ?> 
     