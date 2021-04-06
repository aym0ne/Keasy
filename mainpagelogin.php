<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<!DOCTYPE html>
<html lang="fr">
<style>
  *{
    margin: 0;
    paading: 0;
    box-sizing: border-box;
    font-family:'Arial', sans-serif;
  }
body{
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
background: #8f001a;
}
.box{
  width: 500px;
}
.box h2{
text-align: center;
}
.box-ul{
 position: relative;
 background: #fff;
}
.box ul li{
 list-style: none;
 padding: 10px;
 width: 100%;
 background:#f2f2f2;
 box-shadow: 0 0 20px 0 rgba(72, 94, 116, 0.4);
 transition: transform 0.5s;
 color:#2d2d2c;
 }
 .box ul:hover li{
 opacity: 0.2;
 }
 .box ul li:hover{
 transform: scale(1.1);
 z-index:100;
 background: #2d2d2c;
 box-shadow: 0 5px 25px rgba(0,0,0,.2);
 color: #fff;
 opacity: 1;
 }
 .box ul li span{
 width: 20px;
 height: 20px;
 text-align: center;
 line-height: 20px;
 background: #25bcff;
 color:#fff;
 display: inline-block;
 border-radius: 50%;
 margin-right:10px;
 font-size: 12px;
 font-weight:600;
 transform: translateY(-20px);
 }
 .box ul li:hover span{
 background: #25bcff;
 color: #25bcff;
 }
 .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#2d2d2c;
   color: white;
   text-align: center;
}  
.link{
text-align: right;
}
.link span {
			color: pink;
		}
    /* LARGE SCREENS */ 
 @media(min-width:900px) {
.box{
  width: 800px;
}
 }
</style>
<meta charset="UFT-8">
<title>Mainpage login</title>
<link rel"stylesheet" href="style.css">
</html>
<body>
<div class="box">
<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<h2>Cliquez sur votre rôle</h2>
<ul>
<li><span><a href="loginadmin.php">Admin</a></span>Admin</li>
<li><span><a href="loginchg.php">CHG</a></span>Responsable du CHG</li>
<li><span><a href="logincvg.php">CVG</a></span>Responsable du CVG</li>
<li><span><a href="logineecs.php">EECS</a></span>Responsable du EECS</li>
<li><span><a href="loginmcg.php">MCG</a></span>Responsable du MCG</li>
<li><span><a href="loginfaculte.php">Faculté</a></span>Responsable de la faculté</li>
<li><span><a href="loginceed.php">CEED</a></span>Responsable du CEED</li>
<li><span><a href="logincrpuo.php">CrPuO</a></span>Responsable du CRPuO</li>
</ul>
<div class="footer">
  <p>Développé par Keasy</p>
</div>
 <div class = "link">
      <a href="mainpagelogin.php"><span>Retourner à la page d'accueil</span></a>
      </div>
</div>
</body>
</html>
