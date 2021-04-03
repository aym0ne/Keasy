<?php

include "db_connect.php";
$new_nom = $_GET["newnom"];
$new_prenom = $_GET["newprenom"];
//$new_faculte = $_GET["newfaculte"];
$new_departement = $_GET["newdepartement"];
$new_nombre_de_cle = $_GET["newnombredecle"];
$new_code_de_cle = $_GET["newcodedecle"];
$new_nom_piece = $_GET["newnompiece"];
$new_batiment = $_GET["newbatiment"];
$new_date_de_remise = $_GET["newdatederemise"];
$new_date_de_fin = $_GET["newdatedefin"];
$new_depot = $_GET["newdepot"];


// Search the database for the word bike
echo "<h2>Vous avez ajoutez quelqu'un</h2>";

$sql = "INSERT INTO chg (ID, Nom, Prenom, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot) VALUES (NULL, '$new_nom', '$new_prenom', '$new_departement', '$new_nombre_de_cle', '$new_code_de_cle', '$new_nom_piece', '$new_batiment', '$new_date_de_remise', '$new_date_de_fin', '$new_depot')";
$result = $mysqli->query($sql);

//include "search.php";

?>

<a href="mainpagechg.php">Retour</a>
