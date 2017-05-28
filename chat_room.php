<?php

session_start();
$username = $_SESSION["username"];

$filename = "chatroom_output.txt";

$reply = $_POST["reply"];

$fileinfo = $username.": ".$reply.PHP_EOL;

$f = fopen($filename, "a");
fwrite($f, $fileinfo);
fclose($f);

header('Location: ./MemberArea.php');

	?>