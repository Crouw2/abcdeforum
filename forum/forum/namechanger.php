<?php

if (!defined('GOOD_CALL')) {
  die();
}
	include ('dbconnect/db.inc.php');

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$userValidation = isset($_SESSION['ID']);

		$id = $_SESSION['ID'];

		if ($username != $_SESSION['username'] && $userValidation) {
			f_db_query($server_driver, "
				UPDATE users 
				SET username = :username 
				WHERE ID = :id", 
				[
					':username' => $username, 
					':id' => $id
				]
			);

			$_SESSION['username'] = $username;
			$_SESSION['message'] = 'uw username is nu gewijzigd';
			header("location: index.php?pag=profile");
		}
	}

?>

<? if (isset($_SESSION['username'])): ?>

<!-- Hieronder komt de login input velden	-->
<form action="?pag=nchanger" method="post">
	<h2>Verander username</h2>
	<p><?php echo 'huidige gebruikernaam: ' . $_SESSION['username']; ?><p>
	<input type="text" name="username" placeholder="nieuwe username" required><br>
	<input type="submit" name="submit"><br>
</form>

<? endif; ?>