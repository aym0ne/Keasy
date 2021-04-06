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
<title>addcvg</title>
</html>
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
echo "<h1>Vous avez ajouté quelqu'un à la base de données!</h1>";

$sql = "INSERT INTO cvg (ID, Nom, Prenom, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot) VALUES (NULL, '$new_nom', '$new_prenom', '$new_departement', '$new_nombre_de_cle', '$new_code_de_cle', '$new_nom_piece', '$new_batiment', '$new_date_de_remise', '$new_date_de_fin', '$new_depot')";
$result = $mysqli->query($sql);

//include "search.php";

?>
<html>
<body>
<h1>Vous avez ajouté quelqu'un à la base de données!</h1>
<div class = "square"></div>
<div class = "link">
      <a href="mainpagecvg.php"><span>Retourner à la page d'accueil</span></a>
      </div>
<div class="footer">
<p>Développé par Keasy</p>
</div>
</body>
</html>
