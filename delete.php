<?php
$con = mysql_connect('mysql.hostinger.lt', 'u150195421_ginas', "ginaspalionis");
if (!$con){
die ("Neprisijungia prie duomenu bazes" . mysql_error());
}
mysql_select_db("u150195421_notes",$con);
$dd=$_GET["id"];
$del_from_db = mysql_query ("DELETE FROM `uzrasai` WHERE id=$dd");

echo "IStrinta";

header ('Location: index.php');

?>

