<?php

//hieronder word de database geinclude
include ('dbconnect/db.inc.php');
//Als de wachtwoord vergeten knop is ingedrukt
	if (isset($_POST['succesww'])) {
//de variabelen bruikbaar laten maken
		
		$wachtwoord = mysqli_real_escape_string($db, $_POST['wachtwoord']);
		$wachtwoord2 = mysqli_real_escape_string($db, $_POST['wachtwoord2']);
		$user_id = $_POST['user_id'];
//kijkt of de wachtwoorden gelijk zijn
		if ($wachtwoord === $wachtwoord2) {
			$wachtwoord = hash_pbkdf2('sha256', $wachtwoord, $wachtwoord, 500, 64);
			f_db_query($server_driver, "UPDATE users SET wachtwoord = :wachtwoord WHERE ID = :user", [':wachtwoord' => $wachtwoord, ':user' => $user_id]);
			$_SESSION[message] = 'uw wachtwoord is gewijzigd log nu maar in';
			header("location: index.php?pag=login");
		
	}
} 
if(isset($_GET['id'])){
$user_id = $_GET['id'];
}



?>





<!-- Hieronder komt de login input velden	-->
<form action="?pag=succesww" method="post">
	<h2>Wachtwoord Vergeten</h2>
	<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
	<input type="password" name="wachtwoord" placeholder="wachtwoord" required><br>
	<input type="password" name="wachtwoord2" placeholder="herhaling wachtwoord" required><br>
	<input type="submit" name="succesww"><br>
</form>