<?php
session_start();
$host = "localhost";
$username = "root";
$user_pass = "usbw";
$database_in_use = "phplogin";
$con =  mysqli_connect($host, $username, $user_pass, $database_in_use );
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if ( !isset($_POST['username'], $_POST['password']) ) {
	exit('Please fill both the username and password fields!');
}
if ($stmt = $con->prepare('SELECT id, password FROM accounts_chg WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	if ($_POST['password'] === $password) {
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		header('Location: mainpagechg.php');
	} else {
		echo 'Incorrect username and/or password!';
	}
} else {
	echo 'Incorrect username and/or password!';
}
	$stmt->close();
}
?>