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
<style>
  *{
    margin: 0;
    paading: 0;
    font-family:Arial, Helvetica, sans-serif;
  }body{
    background:#f2f2f2;
  }h1{
  text-align: center;
  }.link{
  text-align: center;
  }.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#2d2d2c;
   color: white;
   text-align: center;
 }.square {
  width: 50px;
  height: 280px;
  background: #f2f2f2;
}  
/* LARGE SCREENS */
		@media(min-width:900px) {
  .square {
  width: 300px;
  height: 280px;
  background: #f2f2f2;
  }   			
}
</style>
<title>add</title>
</html>
<?php

include "db_connect.php";
$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
$num_etu = $_GET["numero_etudiant"];
$tele = $_GET["tele"];
$courriel_uottawa = $_GET["courriel_uottawa"];
$courriel = $_GET["courriel"];
$contact_urgence = $_GET["contact_urgence"];
$tele_urgence = $_GET["tele_contact_urgence"];
$departement = $_GET["departement"];
$nombre_de_cle = $_GET["nombrecle"];
$code_de_cle = $_GET["codedecle"];
$nom_piece = $_GET["nompiece"];
$batiment = $_GET["batiment"];
$date_de_remise = $_GET["datederemise"];
$date_de_fin = $_GET["datedefin"];
$supmail = $_GET["courriel_sup"];
$depot = $_GET["depot"];
$supnom = $_GET["nom_sup"];
$statue = $_GET["statue"];
$statue_cle = 'courriel_envoyer';


echo "<h1>Vous avez ajouté quelqu'un à la base de données!</h1>";

$sql = "INSERT INTO general (ID, Nom, Prenom, Statue, numero_etudiant, courriel_uottawa, telephone, courriel, contact_urgence, telephone_contact_urgence, nom_superviseur, courriel_superviseur, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot, statue_cle) VALUES (NULL, '$nom', '$prenom', '$statue', '$num_etu', '$courriel_uottawa', '$tele', '$courriel', '$contact_urgence', '$tele_urgence', '$supnom', '$supmail', '$departement', '$nombre_de_cle', '$code_de_cle', '$nom_piece', '$batiment', '$date_de_remise', '$date_de_fin', '$depot', '$statue_cle')";
$result = $mysqli->query($sql);

//include "search.php";

?>
<html>
<body>
<h1>Vous avez ajouté quelqu'un à la base de données!</h1>
<div class = "square"></div>
<div class = "link">
      <a href="mainpagelogin.php"><span>Retourner à la page d'accueil</span></a>
      </div>
<div class="footer">
<p>Développé par Keasy</p>
</div>
</body>
</html>
