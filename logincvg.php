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
<style>
/* Make the page use the entire screen */
 .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#2d2d2c;
   color: white;
   text-align: center;
}   
html{
  height: 100%;
}

body {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  display: grid;
  justify-items: center;
  align-items: center;
  background-color:#8f001a;
}

/* White rectangle in the middle of the screen */

#main-holder {
  width: 50%;
  height: 70%;
  display: grid;
  justify-items: center;
  align-items: center;
  background-color: white;
  border-radius: 7px;
  box-shadow: 0 0 20px 0 rgba(72, 94, 116, 0.4);
}


/* Adjust the positioning of the login form inside the last row of the
main grid */

#login-form {
  align-self: flex-start;
  display: grid;
  justify-items: center;
  align-items: center;
}

/* Style the login form fields' placeholders */

.login-form-field::placeholder {
  color: #3a3a3a;
}

/* Style the login form fields (username and password) */

.login-form-field {
  border: none;
  border-bottom: 1px solid #3a3a3a;
  margin-bottom: 10px;
  border-radius: 3px;
  outline: none;
  padding: 0px 0px 5px 5px;
}

/* Style the login button */

#login-form-submit {
  width: 100%;
  padding: 7px;
  border: none;
  border-radius: 5px;
  color: white;
  font-weight: bold;
  background-color: #2d2d2c;
  cursor: pointer;
  outline: none;
}
.link span {
			color: pink;
		}
    /* LARGE SCREENS */
		@media(min-width:900px) {
			#main-holder {
  width: 30%;
  height: 90%;
  display: grid;
  justify-items: center;
  align-items: center;
  background-color: white;
  border-radius: 7px;
  box-shadow: 0 0 20px 0 rgba(72, 94, 116, 0.4);
}
}
</style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login pour CVG</title>
  <link rel="stylesheet" href="login-page.css">
</head>

<body>

  <main id="main-holder">
    <h1 id="login-header">Login</h1>
    
    <form id="login-form" action="authenticatecvg.php" method="post">
      <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username">
      <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
      <input type="submit" value="Login" id="login-form-submit">
    </form>
  </main>
  </div>
  <div class = "link">
      <a href="mainpagelogin.php"><span>Retourner à la page d'accueil</span></a>
      </div>
      <div class="footer">
  <p>Développé par Keasy</p>
</div>
</body>

</html>
