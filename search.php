<?php

// if there are any values in the table, dis[lay the, one at a time
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

$sql = "SELECT ID, Nom, Prenom, Faculte, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot FROM Cle";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
	    echo '<table style="width:100%">';
		 echo "</tr>";
		 echo "<tr>";
  while($row = $result->fetch_assoc()) {
	  		 echo "<tr>";
   echo "<td>id: " . $row["ID"]. " - Nom: " . $row["Nom"]. " - Prenom: " . $row["Prenom"]. " - Faculte: " . $row["Faculte"]. " - Departement: " . $row["Departement"]. " - Nombre de cle: " . $row["Nombre_de_cle"]. " - Code de cle: " . $row["Code_de_cle"]. " - Nom piece: " . $row["Nom_piece"]. " - Batiment: " . $row["Batiment"]. " - Date de remise: " . $row["Date_de_remise"]. " - Date de fin: " . $row["Date_de_fin"]. " - Depot:  " . $row["Depot"]. "<br>";
  echo '</table>';
 }
} else {
  echo "0 results";
}

?>
