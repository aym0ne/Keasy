<?php
include "db_connect.php";
$name=$_GET["nom"];
$departement = $_GET["departement"];
$sql = "DELETE FROM $departement WHERE Nom LIKE '%" .$name. "%'";
$result = $mysqli->query($sql);
?>
<h1>Operatio effectuee</h1>