<html>
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
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">

</script>

</html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylepage.css" />
</head>

<body>
	<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
include "db_connect.php";
?>

	<div class="header">
		<h1>GESTION DE CLÉS</h1>
    	<h1>CRPuO</h1>
	</div>

	<body class="loggedin">
		<nav class="navtop">
			<div class= "top">
			
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
	</body>

<button class="tablink" onclick="openPage('Recherche', this,'#d1ccc7')"id="defaultOpen">Recherche</button>
<button class="tablink" onclick="openPage('Ajout', this, '#bab3ab')" >Ajout</button>
<button class="tablink" onclick="openPage('Suppression', this,'#aca39a')">Suppression</button>
<button class="tablink" onclick="openPage('Modification', this, '#988c81')">Modification</button>
<button class="tablink" onclick="openPage('Transfert', this, '#7c716a')">Transfert</button>


<div id="Recherche" class="tabcontent">
  <h2>Recherche</h2>
  <p>Choisissez l'un des critères de recherche suivant pour effectuer votre recherche:</p> 
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
  <br>
 <form action="keyword.php" id="keywordform">
  <br> Veuillez entrer le département :<br>
  <input type="text" name="departement"><br>
  <br>Recherche:<br>
  <input type="text" name="keyword" placeholder="Recherche..">
  <br>
  <input type="submit" value="submit">
  </form>
</div>

<div id="Ajout" class="tabcontent">
  <h2>Ajout d'une personne.</h2>
  <p>Ajouter une nouvelle personne à la table CRPuO</p> 
  <hr>
	<form action="add.php">
		Nom :<br>   
  <input type="text" name="newnom">  
            <br>   
  Prénom:<br>   
            <input type="text" name="newprenom">   
            <br>  
             Département:<br>   
             <input type="text" name="newdepartement"> <br>     Nombre de clé :<br>   
             <input type="number" name="newnombredecle">  <br>     Code de clé :<br>   
             <input type="text" name="newcodedecle">   <br> Nom de pièce:<br>   
             <input type="text" name="newnompiece"><br>        Bâtiment:<br>   
             <input type="text" name="newbatiment"><br>     Date de remise:<br>   
             <input type="date" name="newdatederemise"> <br> Date de fin:<br>
  <input type="date" name="newdatedefin">
  <br>
  Dépôt :<br>
  <input type="number" name="newdepot">
  <br>
  <input type="submit" value="Ajouter">
  </form><br>
</div>

<div id="Suppression" class="tabcontent">
  <h2>Suppression des données d'une personne.</h2>
  <p>Enlever une personne du tableau de données en indiquant les informations suivantes:</p>
  <form action="delete.php">
  <br>Nom du détenteur :<br>
  <input type="text" id="name" name="nom">
  <br>Département :<br>
  <input type="text" id="département" name="departement">
  <br>
  <input type="submit" value="Supprimer">
  </form>
</div>


<div id="Transfert" class="tabcontent">
<h2>Ajouter une personne automatiquement</h2>
<p>Transférer les données d'une personne d'un département à un autre en entrant les informations suivantes:</p>
<form action="transfer_crpuo.php">
  <br>Nom du détenteur :<br>
  <input type="text" id="name" name="nom"><br>
  <br>Département :<br>
  <input type="text" id="département" name="departement"><br>
  <input type="submit" value="Ajouter" ><br>
</form>
</div>


<div id="Modification" class="tabcontent">
<h2>Modifier les données du tableau.</h2>
<p>Pour faire la modification d'une case du tableau de données entrer les informations suivantes:</p>
<form action="modify_crpuo.php">
Nom de la personne:<br>   
<input type="text" name="nom">           
<br>Département:<br>   
<input type="text" name="département">       
<br>Colonne à modifier:<br>   
<input type="text" name="colonne"> 
<br>Nouvelle information:<br>   
<input type="text" name="modif"><br> 
<input type="submit" value="Sauvegarder">
</form>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<?php
//include "keyword.php";
$mysqli->close();
?>
</body>
</html>
