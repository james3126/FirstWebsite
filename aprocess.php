<?php

$username = $_POST["username"];
$password = $_POST["password"];


if ($username=="james" AND $password=="password"){
	$_SESSION['username'] = $username;
	header('Location: ./MemberArea.php');
	session_start();
	$_SESSION['username'] = $username;
} elseif ($username=="niall" AND $password=="password") {
	header('Location: ./MemberArea.php');
	session_start();
	$_SESSION['username'] = $username;
} else {
	header('Location: ./Login.html');
}



	?>



