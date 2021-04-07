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
<html>
<?php
include "db_connect.php";
$name= $_GET["nom"];
$departement = $_GET["departement"];
$sql =  "INSERT INTO $departement(Nom,Prenom,Statue,numero_etudiant,courriel_uottawa,telephone,courriel,contact_urgence,telephone_contact_urgence,nom_superviseur,courriel_superviseur,Departement,Nombre_de_cle,Code_de_cle,Nom_piece,Batiment,Date_de_remise,Date_de_fin,Depot,statue_cle) SELECT Nom,Prenom,Statue,numero_etudiant,courriel_uottawa,telephone,courriel,contact_urgence,telephone_contact_urgence,nom_superviseur,courriel_superviseur,Departement,Nombre_de_cle,Code_de_cle,Nom_piece,Batiment,Date_de_remise,Date_de_fin,Depot,statue_cle FROM ceed WHERE  Nom  LIKE'%" .$name. "%'";
$result = $mysqli->query($sql);
?>
</html>
<title>transferceed</title>
<body>
<h1> L'ajout automatique à la base de données a été effectué!</h1>
<div class = "square"></div>
<div class = "link">
      <a href="mainpageceed.php"><span>Retourner à la page d'accueil</span></a>
      </div>
<div class="footer">
<p>Développé par Keasy</p>
</div>
</body>
</html>

