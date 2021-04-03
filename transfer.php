<?php
include "db_connect.php";
$name= $_GET["nom"];
$departement = $_GET["departement"];
$sql = "INSERT INTO $departement(Nom,Prenom,Departement,Nombre_de_cle,Code_de_cle,Nom_piece,Batiment,Date_de_remise,Date_de_fin,Depot) SELECT Nom,Prenom,Departement,Nombre_de_cle,Code_de_cle,Nom_piece,Batiment,Date_de_remise,Date_de_fin,Depot FROM general WHERE  Nom  LIKE'%" .$name. "%'";
$result = $mysqli->query($sql);

?>
<h1> Operation effectuee</h1>
