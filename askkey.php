<html>
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<html lang="fr">
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</html>

<body>
<h1>Demande de cle</h1>
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<?php
include "db_connect.php";

?>

  <hr>
  <h2>Faire une demande</h2>
 <form action="Sendemail.php" role="form" method="post" enctype="multipart/form-data" action="Sendmail.php">
  <p>Nom de famille:<br>
  <input type="text" name="nom"></p>
  Prenom:<br>
  <input type="text" name="prenom" ><br>
  <br>
   Numero d'etudiant/d'employer:<br>
  <input type="text" name="etu"><br>
  <br>
    Numero telephone/de poste:<br>
  <input type="text" name="tele" ><br>
  <br>
    Courriel uOttawa:<br>
  <input type="text" name="emailottawa"><br>
  <br>
    Corriel alternatif:<br>
  <input type="text" name="altmail"><br>
  <br>
   Contact d'urgence:<br>
  <input type="text" name="urgence"><br>
  <br>
    Telephone du contact d'urgence:<br>
  <input type="text" name="teleurgence"><br>
  <br>
  Faculte:<br>
  <input type="text" name="faculte"><br>
  <br>
  Departement:<br>
  <input type="text" name="departement"><br>
  <br>
    Nombre de cle :<br>
  <input type="number" name="nombredecle"><br>
  <br>
    Code de cle :<br>
  <input type="text" name="codedecle"><br>
  <br>
    Nom piece:<br>
  <input type="text" name="nompiece"><br>
  <br>
    Batiment:<br>
  <input type="text" name="batiment"><br>
  <br>
    Date de remise:<br>
  <input type="date" name="datederemise"><br>
  <br>
    Date de fin:<br>
  <input type="date" name="datedefin"><br>
  <br>
    Depo :<br>
  <input type="number" name="depot"><br>
   Courriel superviseur :<br>
  <input type="text" name="supmail" required><br>
    Superviseur  :<br>
  <input type="text" name="supnom"><br>
  <br>
  Statue:<br>
  <input type="radio" name="statue"
<?php if (isset($statue) && $statue=="etudiant") echo "checked";?>
value="etudiant">Etudiant
<input type="radio" name="statue"
<?php if (isset($statue) && $statue=="professeur") echo "checked";?>
value="professeur">Professeur
<input type="radio" name="statue"
<?php if (isset($statue) && $statue=="personnel") echo "checked";?>
value="personnel">Personnel
<input type="radio" name="statue"
<?php if (isset($statue) && $statue=="benevol") echo "checked";?>
value="personnel">Bénévole
 <br><br><br>

 Les formations suivantes sont obligatoires pour tous les membres du personnel rémunérés, les étudiants et les bénévoles : <br><br>
  
  
   <input type="hidden" name="MAX_FILE_SIZE" value="100000">
        Insérer les certificats et les formations:
      <p>  <input name="userfile[]" type="file" multiple="multiple"></p>
 <?php 
 // SIMDUT<br>
 // <input type="file"  name="simdut" ><br>
  //  <br>Sensibilisation des travailleur a la sante et a la securite<br>
 // <input type="file" name="secu" id="secu"><br>
 //  <br> Prevention de la violence <br>
 // <input type="file" name="violence" id="violence"><br>
 // <br>  Respect en milieu de travail<br>
 // <input type="file" name="respect" id="respect"><br>
 //   <br>Normes d'accessibilite pour les services a la clientele<br>
 // <input type="file" name="clientele" id="clientele"><br>
//    <br>Travaillons ensemble: Le code des droits de la personne de l'ontario et la LAPHO<br>
 // <input type="file" name="ensemble" id="ensemble"><br>
// <br> <br>Les formations suivantes sont obligatoires pour tous les superviseurs :<br>
 //   <br>Sensibilisation des superviseurs à la santé et à la sécurité<br>
 // <input type="file" name="sup" id="sup"><br>
 //   <br><br>Les formations suivantes sont obligatoires pour toute personne travaillant dans un laboratoire : <br><br>
//	Sécurité en laboratoire<br>
 // <input type="file" name="sciencelab" id="sciencelab"><br>
 //   <br>Gestion des risque en laboratoire de génie<br>
//  <input type="file" name="genielab" id="genielab">
  ?>
  <br>
  <br>
  <input type="submit" name="submit" value="Send mail"/>
  </form>
<?php
//include "keyword.php";

$mysqli->close();


?>

</body>

</html>
<hr>
<a href="index.php">Retour a la page d'accueil</a>