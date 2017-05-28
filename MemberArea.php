<?php

session_start();
$username = $_SESSION["username"];


	Echo "<html>";
	#$pageTitle = "Welcome $username";
	Echo "<title>Logged As: $username</title>";
	require('MemberArea.html');
	echo "</html>";
	echo "Welcome $username";
	
	echo "<br>";
	echo "<br>";
	echo "<br>";	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	if(!file_exists('chat_room.html')) {
		echo "<div style='width: 1000px; height: 500px;'>";
		echo "<fieldset>";
		echo "<legend>Chatroom: </legend>";
		echo "chat offline!";
		echo "<embed src='' height='90%' width='100%'>";
		echo "<textarea name='reply' rows='1' cols='100' placeholder='reply' required ></textarea>";
		echo "<input type='submit' value='Reply' disabled>";
		echo "</fieldset>";
		echo "</div>";
	} else {
		include('chat_room.html');
	}
	
	?>