
<?php
echo"<header >";
echo"<center>";
echo"<h1>EMPRESA<h1>";
echo"</center>";
echo"</header>";


echo"<style type='text/css'>";
echo"table.p2{background-color: white ; left: 50px; position: relative;  margin-top: -100px;}";
echo" main{background-color:#5D98E9;padding: 15%;}";
echo" h3{margin-left: -40px; }";
echo"</style>";



echo"<main>";

  
     echo"<center>";
echo "<table border=0 >"  
."<tr><td width='20%' valign=top>";  
echo "<td width='80%' valign=top>"  
."<form method=post action='Modif1.php'>"      
."<table border=1 cellspacing=0 cellpadding=40  width=80% bgcolor='#F5F8FB' class='p2'>"
."<tr ><td colspan=3><h2>M O D I F I C A R<h2>"  
."<tr ><td>Codigo Articulo</td><td><input type=text name=idpe > <br>"
."<br><input type=submit value=Buscar>"   
."</table>"  
 
."</form>" 
."</table>";   
echo "</table>"; 
echo"</center>";
echo"</main>";
?> 