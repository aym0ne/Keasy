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
<title>transfer</title>
<body>
<h1> Vous avez enlèver quelqu'un de la base de données!</h1>
<div class = "square"></div>
<div class = "link">
      <a href="mainpagelogin.php"><span>Retourner à la page d'accueil</span></a>
      </div>
<div class="footer">
<p>Développé par Keasy</p>
</div>
</body>
</html>
<?php
include "db_connect.php";
$name=$_GET["nom"];
$departement = $_GET["departement"];
$sql = "DELETE FROM $departement WHERE Nom LIKE '%" .$name. "%'";
$result = $mysqli->query($sql);
?>
