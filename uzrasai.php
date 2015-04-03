<?php


@extract ($_POST);
if (isset ($prideti)){
$uzrasas = $_POST['uzrasas'];
mysql_query("INSERT INTO uzrasai (uzrasas) VALUES ('$uzrasas')");

}
?>