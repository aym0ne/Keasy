<html>

<body>
<?php
include "db_connect.php";
$name= $_GET["nom"];
$departement = $_GET["departement"];
$colonne = $_GET["colonne"];
$modif = $_GET["modif"];

$sql = "UPDATE $departement SET $colonne = '$modif' WHERE Nom LIKE '%" .$name. "%'";
$result = $mysqli->query($sql);

if ($mysqli -> error) {
  echo "<h1>Il ya eu une erreur<br> Veuillez ressayer</h1> " ;
  
}
else{
	echo "<h1>Operation effectuee</h1>";
}
$mysqli->close();

?>
<a href="mainpageadmin.php">Retour </a>
</body>
</html>