<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<html>
<style>
body {
			background: #f2f2f2;
			padding: 1em;
			text-align: center;
		}	
.table
  {  
     font-size:12pt;
     background-color:#FFFFFF;
     color:white;
     text-align:center;  }
</style>
<body>
</body>
</html>
<html lang="fr">
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</html>
<h2> La demande a ete envoyee avec succes </h2>




<?php

include "db_connect.php";


//$name_simdut = $_FILES['simdut']['name'];
//$size_simdut = $_FILES['simdut']['size'];
//$tmp_simdut = $_FILES['simdut']['tmp_name'];
//$type_simdut = $_FILES['simdut']['type'];
// $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
//$name_secu = $_FILES['secu']['name'];
//$tmp_secu = $_FILES['secu']['tmp_name'];
//$name_violence = $_FILES['violence']['name'];
//$tmp_violence = $_FILES['violence']['tmp_name'];
//$name_respect = $_FILES['respect']['name'];
//$tmp_respect = $_FILES['respect']['tmp_name'];
//$name_clientele = $_FILES['clientele']['name'];
//$tmp_clientele = $_FILES['clientele']['tmp_name'];
//$name_ensemble = $_FILES['ensemble']['name'];
//$tmp_ensemble = $_FILES['ensemble']['tmp_name'];
//$name_sup = $_FILES['sup']['name'];
//$tmp_sup = $_FILES['sup']['tmp_name'];
//$name_sciencelab = $_FILES['sciencelab']['name'];
//$tmp_sciencelab = $_FILES['sciencelab']['tmp_name'];
//$name_genielab = $_FILES['genielab']['name'];
//$tmp_genielab = $_FILES['genielab']['tmp_name'];



$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
//$faculte = $_POST["faculte"];
$departement = $_POST["departement"];
$nombre_de_cle = $_POST["nombredecle"];
$code_de_cle = $_POST["codedecle"];
$nom_piece = $_POST["nompiece"];
$batiment = $_POST["batiment"];
$date_de_remise = $_POST["datederemise"];
$date_de_fin = $_POST["datedefin"];
$supmail = $_POST["supmail"];
$depot = $_POST["depot"];
$supnom = $_POST["supnom"];
$etu = $_POST["etu"]; //numéro étudiant ou employer
$tele = $_POST["tele"]; //Numero telephone ou poste
$mailuottawa = $_POST["emailottawa"];
$altmail = $_POST["altmail"];
$urgence = $_POST["urgence"]; //Contact urgence
$tele_urgence = $_POST["teleurgence"];
$statue = $_POST["statue"];

echo "<h2> $nom $prenom vous avez envoyer un courriel a $supnom au $supmail</h2>";


//$files = array(
if (array_key_exists('userfile', $_FILES)) {
require_once('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'Demandecle@gmail.com';
$mail->Password = 'e2vxyk5d280456l';
$mail->SetFrom('Demandecle@key.org');
$mail->Subject = 'Demade de cle uottawa';


//Attach multiple files one by one
    for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));
        $filename = $_FILES['userfile']['name'][$ct];
        if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            //$msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    if (!$mail->send()) {
    //    $msg .= "Mailer Error: " . $mail->ErrorInfo;
    } else {
       // $msg .= "Message sent!";
    }
}
//$mail->addAttachment($file_tmp, $file_name);
$mail->Body = "Bonjour $supnom,<br>Vous avez une demande de $prenom $nom pour y avoir une cle.<br>
<br> nom: $nom <br> Prenom: $prenom, <br> Numero etudiant/employer : $etu <br> Numero telephone: $tele
<br> Courriel uOttawa: $mailuottawa <br> Courriel alternatif: $altmail <br> Contact urgence: $urgence <br>
Telephone du contact d'urgence: $tele_urgence  <br> Faculte: $faculte <br> Departement: $departement <br> Nombre de cle: $nombre_de_cle
<br> Code de cle: $code_de_cle <br> Nom de la piece: $nom_piece <br> Batiment: $batiment <br> Date de remise: $date_de_remise <br> Date de fin: $date_de_fin <br>
Depot: $depot <br> Statue: $statue <br><br>
SVP envoye l'information et les certificats a l'adjointe de la demande de cle. Si vous acceptez, vous pouvez prendre une capture d'ecran de la demande et l'envoyer a l'adjointe avec les certificats, pour proceder la demande.<br><br>Merci,<br> Systeme de demande de cle uOttawa." ;
$mail->AddAddress($supmail);
$mail->Send();
//$attachment= $pdf->Output('attachment.pdf', 'S');

//$mailer->AddStringAttachment($attachment, 'attachment.pdf');
//include "pdfdemande.php";


$sql = "INSERT INTO general (ID, Nom, Prenom, Departement, Nombre_de_cle, Code_de_cle, Nom_piece, Batiment, Date_de_remise, Date_de_fin, Depot) VALUES (NULL, '$nom', '$prenom', '$departement', '$nombre_de_cle', '$code_de_cle', '$nom_piece', '$batiment', '$date_de_remise', '$date_de_fin', '$depot')";
$result = $mysqli->query($sql);



?>





<a href="askkey.php">Retour</a>
