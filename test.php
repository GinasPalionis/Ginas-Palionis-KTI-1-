<html>
<head>
<title>Retrieve and delete data  from database </title>
</head>
<body>

<form action="" method="post">

    <?php
    
    mysql_connect("localhost", "root", "") or die (mysql_error ());

    mysql_select_db("notes") or die(mysql_error());

   

 
$sql = "SELECT * FROM uzrasai;";
$result = mysql_query($sql) or die (mysql_error());
echo "<form method=post action=.php name=myform>";
foreach ($result as $row)
{
echo "<input style=inline type='radio' name='ids[]' value='$row[id]'>";
echo $row[name]."";
}
echo "<input type='submit' value='submit' name='submit'/>";
echo "</form>";


if ($_POST['submit'])
{
foreach ($_POST[ids] as $ids) {
$sql = "DELETE FROM uzrasai WHERE id=$ids;";
mysql_query($sql);
echo "Row with ID ".$ids." has been deleted!";
}
}


mysql_close();
?>











</form>
</body>
</html>