<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<!DOCTYPE html>
<html lang="fr">
<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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
$departement = $_GET["departement"];
echo "<h2>Recherche</h2>";
echo "<hr>";
if ($keyword == 'Nom'){
    $sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE Nom LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
} 
elseif($keyword == "Prenom"){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE Prenom LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
} 
 elseif($keyword == 'Nombre_de_cle'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE Nombre_de_cle LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
} 
elseif($keyword == 'Code_de_cle'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE Code_de_cle LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
} 
elseif($keyword == 'Nom_piece'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE Nom_piece LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);	
} 
elseif($keyword == 'Batiment'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE Batiment LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
} 
elseif($keyword == 'Date_de_remise'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE Date_de_remise LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
} 
elseif($keyword == 'Date_de_fin'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE Date_de_fin LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
} 
elseif($keyword == 'Depot'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE Depot LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
}
elseif($keyword == 'Statue'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE Statue LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
}
elseif($keyword == 'Numero_etudiant'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE numero_etudiant LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
}
elseif($keyword == 'Courriel'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE courriel LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
}
elseif($keyword == 'Courriel_uottawa'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE courriel_uottawa LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
}
elseif($keyword == 'Contact_urgence'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE contact_urgence LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
}
elseif($keyword == 'Telephone_contact_urgence'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE telephone_contact_urgence LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
}
elseif($keyword == 'Nom_superviseur'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE nom_superviseur LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
}
elseif($keyword == 'Courriel_superviseur'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE courriel_superviseur LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
}
elseif($keyword == 'Statue_cle'){
	$sql = "SELECT ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle FROM $departement WHERE statue_cle LIKE '%". $keywordfromform ."%'";
    $result = $mysqli->query($sql);
}



 else{
	echo"Zéro (0) résultats.";
}

if ($result->num_rows > 0) {
	 echo '<table style="width:100%">';
	 echo '<table border="black">';
	   echo "</tr>";
	 echo" <tr> <td>Id</td><td>Nom</td><td>Prénom</td><td>Statut</td><td>Numéro étudiant/employé</td><td>Courriel uOttawa</td><td>Téléphone</td><td>Courriel</td><td>Contact urgence</td><td>Téléphone urgence</td><td>Nom superviseur</td><td>Courriel superviseur</td><td>Département</td><td>Nombre de clé</td><td>Code de clé</td><td>Nom pièce</td><td>Bâtiment</td><td>Date de remise</td><td>Date de fin</td><td>Dépôt</td><td>Statut de la clé</td></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
	    echo "<tr>";
    echo "<td>" . $row["ID"]. "</td><td>" . $row["Nom"]. "</td><td>" . $row["Prenom"]. "</td><td>". $row["Statue"]. "</td><td>". $row["numero_etudiant"]. "</td><td>". $row["courriel_uottawa"]. "</td><td>". $row["telephone"]. "</td><td>". $row["courriel"].
       "</td><td>". $row["contact_urgence"]. "</td><td>". $row["telephone_contact_urgence"]. "</td><td>". $row["nom_superviseur"]. "</td><td>". $row["courriel_superviseur"].  "</td><td>". $row["Departement"]. " </td><td>" . $row["Nombre_de_cle"]. " </td><td>" . $row["Code_de_cle"]. 
	" </td><td>" . $row["Nom_piece"]. " </td><td>" . $row["Batiment"]. "</td><td>" . $row["Date_de_remise"]. "</td><td>" . $row["Date_de_fin"]. "</td><td>" . $row["Depot"]. "</td><td>" . $row["statue_cle"]. "</td><tr>";
    echo"";
  }
          echo '</table>';
} else {
  echo " Essayez à nouveau.";
}

?>
<hr>
<br>
<a href="mainpageadmin.php">Retourner à la page précédente</a>
