<html>
 
<head>

</head>

<body>
<h1>Recherche</h1>


<?php

include "db_connect.php";

?>
  <label for="keywords">Choisir quel category a chercher:</label><br>
<select name="keywords" id="keywords" form="keywordform">
  <option value="Nom">Nom</option>
  <option value="Prenom">Prenom</option>
  <option value="Faculte">Faculte</option>
 
  <option value="Nombre_de_cle">Nombre de cle</option>
  <option value="Code_de_cle">Code de cle</option>
  <option value="Nom_piece">Nom de la piece</option>
  <option value="Batiment">Batiment</option>
  <option value="Date_de_remise">Date de remise</option>
  <option value="Date_de_fin">Date de fin</option>
  <option value="Depot">Depot</option>
</select>

<form action="keyword.php" id="keywordform">
   Recherche:<br>
  <input type="text" name="keyword"><br>
  Veuillez entrer le departement :<br>
  <input type="text" name="departement"><br>
  <input type="submit" value="submit">
  </form>

<hr>
<h1>Ajouter</h1>
<form action="transfer.php">
  veuillez entrer le nom de la personne a ajouter :<br>
  <input type="text" name="nom"><br>
  
  Veuillez entrer le departement :<br>
  <input type="text" name="departement"><br>
  <input type="submit" value="ajouter" ><br>
  
</form>
 <hr>
 <h1>Supprimer</h1>
<form action="delete.php">
  veuillez entrer le nom de la personne a supprimer :<br>
  <input type="text" name="nom"><br>
   Veuillez entrer le departement :<br>
  <input type="text" name="departement"><br>
  <input type="submit" value="supprimer" ><br>
</form>
 <hr>
 <h1>Modiffier</h1>
<form action="modify.php">
  veuillez entrer le nom de la personne  :<br>
  <input type="text" name="nom"><br>
  veuillez entrer le departement :<br>
  <input type="text" name="departement"><br>
   veuillez entrer la colonne a modiffier<br>
  <input type="text" name="colonne"><br>
   veuillez entrer le nouveau texte<br>
  <input type="text" name="modif"><br>
  <input type="submit" value="modiffier" ><br>



  
<?php
//include "keyword.php";

$mysqli->close();

?>
<br>
<a href="index.php">Retour a la page d'accueil</a>
</body>

</html>
