<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "notes";

mysql_connect($host, $user, $pass);
mysql_select_db($database);

@extract ($_POST);
if (isset ($prideti)){
$uzrasas = $_POST['uzrasas'];
mysql_query("INSERT INTO uzrasai (uzrasas) VALUES ('$uzrasas')");
}

//header('Location: index.html');
?>
<?php
//$host = "localhost";
//$user = "root";
//$pass = "";
//$database = "notes";

$con = mysql_connect('localhost', 'root', "");
if (!$con){
die ("Neprisijungia prie duomenu bazes" . mysql_error());
}
mysql_select_db("notes",$con);
$sql = "SELECT * FROM `uzrasai`";
$mydata = mysql_query ($sql,$con);

while($row = mysql_fetch_array($mydata))
echo "<li>" . $row['uzrasas'] . "</li>";

mysql_close($con);

?>