<?php

$filename = "output.txt";
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$comment = $_POST["comment"];
$space = " ";

$x = 20 - strlen($firstname);
$y = 20 - strlen($lastname);

$firstNameForTable = $firstname.str_repeat(" ", $x)." ";
$lastNameForTable = $lastname.str_repeat(" ", $y)." ";

if (strlen($email)==0) {
	$emailForTable = "No email specified".str_repeat($space, 22);
} else {
	$z = 40 - strlen($email);
	$emailForTable = $email.str_repeat($space, $z);
}

$fileinfo = $firstNameForTable.$space.$lastNameForTable.$space.$emailForTable.$space.$comment.PHP_EOL;

if ($firstname=="james" AND $lastname=="kerley") {
	echo "<title>HI ME!</title>";
	echo "<p1>Your awesome, no information will be posted as this is a <strong>test</strong></p1>";
	echo "<br>";
	echo "<p2 style='font-size:32px'>WOO! IT ALL WORKED</p2>";
} else {
	#echo "<title>$firstname $lastname 's comment</title>";
	#echo "Hello $firstname $lastname";
	#echo "<br/>";
	#echo "Your E-Mail is: $email";
	#echo "<br/>";
	#echo "Your comment is $comment";
	header("Location: /test.html");
	
	$f = fopen("output.txt", "a");
	fwrite($f, $fileinfo);
	fclose($f);
}

?>