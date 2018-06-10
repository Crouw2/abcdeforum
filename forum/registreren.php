<?php
	include ('dbconnect/db.inc.php');
//Als de verzend knop ingedrukt is doet ie het volgende
	if(isset($_POST['submit'])){	
//de variablen bruikbaar laten maken
		$voornaam =	mysqli_real_escape_string($db, $_POST['voornaam']);
		$achternaam = mysqli_real_escape_string($db, $_POST['achternaam']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$wachtwoord = mysqli_real_escape_string($db, $_POST['wachtwoord']);
		$wachtwoord2 = mysqli_real_escape_string($db, $_POST['wachtwoord2']);

//Kijken of de wachtwoorden gelijk zijn
		if ($wachtwoord === $wachtwoord2){
//kijk of de email al bestaat
			$result = f_db_query($server_driver, "SELECT * FROM users WHERE email=:email", [':email' => $email]);
    		$count = $result->rowcount();
//Kijkt nu naar hoeveel rijen er in het resultaat zijn
//rijen 0 = deze email bestaat nog niet
//rijen 1 = deze email bestaat al
			if($count == 0){
//sha256 is een algoritme, 500x wachtwoord hashen, lengte 64 tekens
//Hieronder word het wachtwoord gehashed
			$wachtwoord = hash_pbkdf2('sha256', $wachtwoord, $wachtwoord, 500, 64);
//md5 is ook een hash algoritme, reg key is een confirm email mailtje
			$reg_key = md5(date('y-m-d-H-i-s') . $username);
//Zorg ervoor dat alle informatie in de database terecht komt
				$sql = "INSERT INTO users(username, email, password, reg_key, reg_bevestig, pc_key, pc_active, role) VALUES( :usern , :email , :password , :reg_key , 'nee' , '' , 'nee' , :role)";
	f_db_query($server_driver, $sql , [':usern' => $username, ':email' => $email, ':password' => $password, ':reg_key' => $reg_key , ':role' => $role]);
//stuurt bestand wat in index.php staat stuurt die terug naar de browser
			header("location: index.php");
			} else {
				echo 'De email bestaat al kies een andere email';
			}
		}
	}

















?>
<!-- Hieronder komt de registratie input velden	-->
<form action="?pag=registreren" method="post">
	<h2>Signup</h2>
	<input type="text" name="voornaam" placeholder="voornaam" required><br>
	<input type="text" name="achternaam" placeholder="achternaam"><br>
	<input type="text" name="username" placeholder="username" required><br>
	<input type="email" name="email" placeholder="email" required><br>
	<input type="password" name="wachtwoord" placeholder="wachtwoord" required><br>
	<input type="password" name="wachtwoord2" placeholder="herhaling wachtwoord" required><br>
	<input type="submit" name="submit">
</form>