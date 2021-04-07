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
<head>
	<style>
		/*FORM STYLES */
		* {
			box-sizing: border-box;
		}
		body {
			background: #8f001a;
			color: #2d2d2c;
			line-height: 1.6;
			font-family: Arial, Helvetica, sans-serif;
			padding: 1em;
		}		.wrapper {
			box-shadow: 0 0 20px 0 rgba(72, 94, 116, 0.9);
		}	.wrappper>* {
			padding: 1em;
		}
		/*FORM STYLES*/
        .title {
			text-align: center;
		}	.title span {
			color: #fff;
		}.link span {
			color: pink;
		}.contact form {
			display: grid;
			grid-template-columns: 1fr 1fr;
			grid-gap: 20px;
		}.contact form label {
			display: block;
		}	.contact form p {
			margin: 0;
		}.contact form .full {
			grid-column: 1/3;
		} .contact {
			background: #f2f2f2;
		}.container {
			max-width: 1170px;
			margin-left: auto;
			margin-right: auto;
			padding: 1em;
		}
        /*FILES STYLES*/
		.files {
			background: #f2f2f2;
		}.files h3,.files ul {
			text-align: left;
			margin: 0 0 1rem 0;
		}.files button {
			width: 100%;
			padding: 1em;
		}.files button {
			background: #8f001a;
			border: 0;
			text-transform: uppercase;
		}.files button:hover,
		.files button:focus {
			background: #2d2d2c;
			color: #fff;
			outline: 0;
			transition: background-color 1s ease-out;
		}
        /* The container for the custom radio button */
.container_radio {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
/* Hide the browser's default radio button */
.container_radio input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #fff;
  border-radius: 100%;
}
/* On mouse-over, add a grey background color */
.container_radio:hover input ~ .checkmark {
  background-color: #ccc;
}
/* When the radio button is checked, add a blue background */
.container_radio input:checked ~ .checkmark {
  background-color: #df4526;
}
/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
/* Show the indicator (dot/circle) when checked */
.container_radio input:checked ~ .checkmark:after {
  display: block;
}
/* Style the indicator (dot/circle) */
.container_radio .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}ul.b {
  list-style-type: square;
}.add {
  text-align: center;
}
		/* LARGE SCREENS */
		@media(min-width:900px) {
			.wrapper {
				display: grid;
				grid-template-columns: 1fr 1fr;
			}.files button {
			width: 100%;
			padding: 1em;
		}.square {
  width: 300px;
  height: 280px;
  background: #f2f2f2;
}
        }
	</style>
	<body>
		<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale-1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1 class="title"><span>Demande de clé</span></h1>
    <div class="wrapper">
      <div class="contact">
        <h3>Répondez aux questions ci-dessus.</h3>
         <form action="Sendemail.php" role="form" method="post" enctype="multipart/form-data" action="Sendmail.php">
          <p>
            <label>Nom de famille</label>
            <input type="text" name="nom">
          </p>
          <p>
            <label>Prénom</label>
            <input type="text" name="prenom">
          </p>
          <p>
            <label>Numéro d'étudiant/employé</label>
            <input type="text" name="numero_etudiant">
          </p>
          <p>
            <label>Numéro de téléphone</label>
            <input type="text" name="tele">
          </p>
           <p>
            <label>Courriel uOttawa</label>
            <input type="text" name="courriel_uottawa">
          </p>
          <p>
            <label>Courriel alternatif</label>
            <input type="text" name="courriel">
          </p>  
           <p>
            <label>Contact d’urgence</label>
            <input type="text" name="contact_urgence">
          </p>
          <p>
            <label>Numéro de téléphone du contact</label>
            <input type="text" name="tele_contact_urgence">
          </p>
          <p>
            <label>Nombre de clé</label>
            <input type="number" name="nombrecle">
          </p>
          <p>
            <label>Code de clé</label>
            <input type="text" name="codedecle">
          </p>
          <p>
          <label for="batiment">Bâtiment</label>
    <select id="batiment" name="batiment">
      <option value="CBY">CBY</option>
      <option value="STE">STE</option>
      <option value="STEM">STEM</option>
      <option value="ARC">ARC</option>
      <option value="200 Lees">200 Lees</option>
      <option value="Minto">Minto</option>
    </select>
    </p>
    <p>
<label for="departement">Département</label>
    <select id="departement" name="departement">
      <option value="CHG">CHG</option>
      <option value="CVG">CVG</option>
      <option value="EECS">EECS</option>
      <option value="MCG">MCG</option>
      <option value="Faculté">Faculté</option>
      <option value="CEED">CEED</option>
      <option value="CRPuO">CRPuO</option>
    </select>
    </p>
     <p>
          Date de remise:<br>
  <input type="date" name="datederemise"></p>
  <p>
  Date de fin:<br>
  <input type="date" name="datedefin">
  </p>
        
          <p>
            <label>Nom de la salle</label>
            <input type="text" name="nompiece">
          </p>
          <p>
            <label>Dépôt ($CAD)</label>
            <input type="number" name="depot">
          </p>
          <p>
            <label>Nom du superviseur</label>
            <input type="text" name="nom_sup">
          </p> 
          <p>
            <label>Courriel du superviseur</label>
            <input type="text" name="courriel_sup">
          </p>
  <class="full">
          <h4>Statut</h4>
<label class="container_radio">Étudiant
  <input type="radio" checked="checked" name="statue">
  <span class="checkmark"></span>
</label>
<label class="container_radio">Professeur
  <input type="radio" name="statue">
  <span class="checkmark"></span>
</label>
<label class="container_radio">Personnel
  <input type="radio" name="statue">
  <span class="checkmark"></span>
</label>
<label class="container_radio">Bénévole
  <input type="radio" name="statue">
  <span class="checkmark"></span>
</label>
  
       
      </div>
 
      <div class="files">
        <br><h3>Veuillez téléverser les fichiers PDF pertinents.</h3>                <input type="hidden" name="MAX_FILE_SIZE" value="100000">
    <h4>Les formations suivantes sont obligatoires pour tous les membres du personnel rémunérés, les étudiants et les bénévoles:</h4>
<ul class="b">
<li>Sensibilisation des travailleurs à la santé et la sécurité</li>
<li>Prévention de la violence</li>
<li>Respect en milieu de travail</li>
<li>Normes d'accessibilités pour les services à la clientèle</li>
<li>Travaillons ensemble : Le code des droits de la personne de l’Ontario et la LAPHO</li>
</ul>
 <h4>Les formations suivantes sont obligatoires pour tous les superviseurs:</h4>
<ul class="b">
<li>Sensibilisation des superviseurs à la santé et à la sécurité</li>
</ul>
    <h4>Les formations suivantes sont obligatoires pour toute personne travaillant dans un laboratoire:</h4> 
<ul class="b">
<li>Sécurité en laboratoire</li>
<li>Gestion des risques en laboratoire de génie</li>
</ul>
<div class="add">
<input type="hidden" name="MAX_FILE_SIZE" value="100000">
      <p>  <input name="userfile[]" type="file" multiple="multiple"></p>
<br><br>
</div>
          <class="full">
            <div class = "square"></div>
            <button>Envoyez le formulaire</button>
			  </form>

      </div>
    </div>
  </div>
  <div class = "link">
<a href="index.php"><span>Retourner à la page d'accueil</span></a>
 </div>
</body>
</html>
