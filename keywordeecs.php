<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<html lang="fr">
<div id="google_translate_element"></div>

<!DOCTYPE html>
<html>
<style>
body {
			background: #f2f2f2;
			padding: 1em;
		}	
.table
  {  
     font-size:12pt;
     background-color:#FFFFFF;
     color:white;
     text-align:center;  }
</style>
<body>
</body>
</html>
<?php

include "db_connect.php";
$keywordfromform = $_GET["keyword"];
$keyword = $_GET["keywords"];
$departement = 'eecs';
echo "<h2>Recherche</h2>";
echo "<hr>";
if ($keyword == 'Nom'){
    $sql = "SELECT ID, Nom, Prenom, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot FROM $departement WHERE Nom LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
} 
elseif($keyword == "Prenom"){
	$sql = "SELECT ID, Nom, Prenom, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot FROM $departement WHERE Prenom LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
} 
 elseif($keyword == 'Nombre_de_cle'){
	$sql = "SELECT ID, Nom, Prenom, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot FROM $departement WHERE Nombre_de_cle LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
} 
elseif($keyword == 'Code_de_cle'){
	$sql = "SELECT ID, Nom, Prenom, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot FROM $departement WHERE Code_de_cle LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
} 
elseif($keyword == 'Nom_piece'){
	$sql = "SELECT ID, Nom, Prenom, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot FROM $departement WHERE Nom_piece LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);	
} 
elseif($keyword == 'Batiment'){
	$sql = "SELECT ID, Nom, Prenom, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot FROM $departement WHERE Batiment LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
} 
elseif($keyword == 'Date_de_remise'){
	$sql = "SELECT ID, Nom, Prenom, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot FROM $departement WHERE Date_de_remise LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
} 
elseif($keyword == 'Date_de_fin'){
	$sql = "SELECT ID, Nom, Prenom, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot FROM $departement WHERE Date_de_fin LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
} 
elseif($keyword == 'Depot'){
	$sql = "SELECT ID, Nom, Prenom, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot FROM $departement WHERE Depot LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
}
 else{
	echo"Zéro (0) résultats.";
}

if ($result->num_rows > 0) {
	 echo '<table style="width:100%">';
	 echo '<table border="black">';
	   echo "</tr>";
	 echo" <tr> <td>Id</td><td>Nom</td><td>Prenom</td><td>Departement</td><td>Nombre de cle</td><td>Code de cle</td><td>Nom piece</td><td>Batiment</td><td>Date de remise</td><td>Date de fin</td><td>Depot</td></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
	    echo "<tr>";
    echo "<td>" . $row["ID"]. "</td><td>" . $row["Nom"]. "</td><td>" . $row["Prenom"]. "</td><td>". $row["Departement"]. " </td><td>" . $row["Nombre_de_cle"]. " </td><td>" . $row["Code_de_cle"]. 
	" </td><td>" . $row["Nom_piece"]. " </td><td>" . $row["Batiment"]. "</td><td>" . $row["Date_de_remise"]. "</td><td>" . $row["Date_de_fin"]. "</td><td>" . $row["Depot"]. "</td><tr>";
    echo"";
  }
          echo '</table>';
} else {
  echo " Essayez à nouveau.";
}

?>
<hr>
<br>
<a href="mainpageeecs.php">Retourner à la page précédente</a>