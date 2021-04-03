<html>

<body>
<?php
include "db_connect.php";
$name= $_GET["nom"];
$departement = $_GET["departement"];
$sql = "INSERT INTO $departement(Nom,Prenom,Faculte,Departement,Nombre_de_cle,Code_de_cle,Nom_piece,Batiment,Date_de_remise,Date_de_fin,Depot) SELECT Nom,Prenom,Faculte,Departement,Nombre_de_cle,Code_de_cle,Nom_piece,Batiment,Date_de_remise,Date_de_fin,Depot FROM general WHERE  Nom  LIKE'%" .$name. "%'";
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