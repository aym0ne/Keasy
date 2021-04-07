<!DOCTYPE html>
<html lang="fr">
<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<div class="header">
    <h1>GESTION DE CLÉS</h1>
    <p> Bienvenue sur le site de demande et de gestion de clés de l'Université d'Ottawa</p>
  </div>
 
</div>
<?php
include "db_connect.php";
?>
<div class="row">
    <div class="column">
      <h2>OPTION DEMANDEUR DE CLÉ
        <p>Appuyez içi pour avoir accès au formulaire de demande de clé et faire votre demande.</p>
      </h2>
      <a href="mainpagelogin.php" class="button"><span>S'inscrire</span></a>
</div>
 
<div class="column">
<h2>OPTION ADMINISTRATEUR</h2>
<p>Appuyez içi pour vous connecter à votre compte pour accéder à l'information.
</h2>
<br>
<br>
<br>
<a href="askkey.php" class="button"><span>Se connecter</span></a>
</div>
<div class="vl"></div>
<div class="footer">
<p>Développé par Keasy</p>
<?php
?>
</div>
</body>
</html>
