<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Užrašai Tau</title>
	
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='styltesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="styless.css" />
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>



</head>

<body>



<div class='navigation'>
	
		<a id="meniuPagrindinis" href="index.php">Užrašai</a>
		<a id="meniuNepamirsk" href="nepamirsk.html">Nepamiršk</a>
		<a id="meniuApie" href="apie.html">Apie</a>
        
</div>

<div class='note'>
		
		<div class='note2'>
		
		<h1>Tavo užrašai</h1>
<?php
//$host = "mysql.hostinger.lt";
//$user = "u150195421_ginas";
//$pass = "ginaspalionis";
//$database = "u150195421_notes";
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect('mysql.hostinger.lt', 'u150195421_ginas', "ginaspalionis");
mysql_select_db("u150195421_notes");

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

$con = mysql_connect('mysql.hostinger.lt', 'u150195421_ginas', "ginaspalionis");
if (!$con){
die ("Neprisijungia prie duomenu bazes" . mysql_error());
}
mysql_select_db("u150195421_notes",$con);
$sql = "SELECT * FROM `uzrasai`";
$mydata = mysql_query ($sql,$con);

while($row = mysql_fetch_array($mydata))
echo "<li><input id='baigta' type='checkbox'></input>" . $row['id'] . "&nbsp;" . $row['uzrasas'] . " </li>";



mysql_close($con);
?>








<a href='deleteall.php'><button id='visus' >Ištrinti visus įrašus</button></a>

			
			
			<form action='index.php' method='post'>
			<input type="text"  id='uzrasai' name="uzrasas" "></input> <input  type="submit"  name="prideti" id='prideti' value="Pridėti"/>
			</form> <br>
			<form method="get" action="delete.php">
   <input type='text' name='id' id='numeris' value="Įveskite užrašo numerį kurį norite pašalinti"/>
   <input type="submit" id='pasalinti' value="Pašalinti"/>
</form>
		</div>
</div>

<footer> &copy; Ginas Palionis 2015 &trade;</footer>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>