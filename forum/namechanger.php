<?php
	include ('dbconnect/db.inc.php');

	if (isset($_POST[''])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$username2 = mysqli_real_escape_string($db, $_POST['username2']);
		$checkPassword = mysqli_real_escape_string($db, $_POST['wachtwoord']);

		$user_id = $_POST['user_id'];

			if ($username === $username2) {
				f_db_query($server_driver, "UPDATE users SET username = :username WHERE ID = :user", [':username' => $username, ':user' => $user_id]);
						$_SESSION[message] = 'uw username is nu gewijzigd';
				header("location: index.php?pag=profile");
			}
	}





?>

<!-- Hieronder komt de login input velden	-->
<form action="?pag=nchanger" method="post">
	<h2>Verander username</h2>
	<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
	<input type="text" name="username" placeholder="username" required>
	<input type="text" name="username2" placeholder="username2" required><br>
	<input type="password" name="wachtwoord" placeholder="wachtwoord" required><br>
	<input type="submit" name="succesww"><br>
</form>