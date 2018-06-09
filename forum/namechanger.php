<?php
	include ('dbconnect/db.inc.php');

	if (isset($_POST)) {
		# code...
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