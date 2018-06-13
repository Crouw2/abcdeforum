<?php

if (!defined('GOOD_CALL')) {
  die();
}
// hieronder word de database geinclude
include ('dbconnect/db.inc.php');
	// Als de loginbtn is ingedrukt
	if (isset($_POST['loginbtn'])) {
		// de variabelen bruikbaar laten maken
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$wachtwoord = mysqli_real_escape_string($db, $_POST['wachtwoord']);
		
		// het herhaald de wachtwoordhash van registreren
		$wachtwoord = hash_pbkdf2('sha256', $wachtwoord, $wachtwoord, 500, 64);
		
		//kijkt of het email en wachtwoord gelijk zijn			
		$sql = "
			SELECT * FROM users 
			WHERE email = '$email' 
			AND wachtwoord = '$wachtwoord'
		";
		
		// Bij result voert die deze query uit
		$result = mysqli_query($db, $sql);
		
		//bekijkt of de email bevestigd is en het wachtwoord niet vergeten bent
		$sql2 = "
			SELECT * FROM users 
			WHERE reg_bevestig = 'ja' 
			AND email = '$email' 
			AND pc_active = 'nee'
		";
		
		// Bij result voert die deze query uit
		$result2 = mysqli_query($db, $sql2);
		
		// Kijkt of beiden gelijk zijn aan het getal
		if(mysqli_num_rows($result) == 1 && mysqli_num_rows($result2) == 1){
			
			// Hieronder gebeurt er dat het de username opzoekt in de database
			$user2 = "
				SELECT username,email,voornaam,achternaam,ID,role 
				FROM users 
				WHERE email = '$email'
			";
			$user = mysqli_query($db, $user2);
			
			//We maken de query van $user bruikbaar hieronder
			$_SESSION = mysqli_fetch_assoc($user);
			$_SESSION['message'] = 'Welcome ' . $_SESSION['username']; 
			header("location: index.php");
		}
	}

	if(isset($_SESSION['message'])){
		echo $_SESSION['username'];
		unset($_SESSION['message']);
	}

?>

<!-- Hieronder komt de login input velden	-->
<form action="?pag=login" method="post">
	<h2>Login</h2>
	<input type="text" name="email" placeholder="Email" required><br>
	<input type="password" name="wachtwoord" placeholder="wachtwoord" required><br>
	<input type="submit" name="loginbtn">
	<a href="?pag=wwvergeten">Wachtwoord vergeten</a>
</form>
