<?php
		?><div class="mainprofile"><?php
	echo "PROFILE PAGE" . "<br>";
?>	<br></div>
<?php
?><div class="profile"><?php
echo "Username : " . $_SESSION['username'] . "<br>";
echo "Voornaam : " . $_SESSION['voornaam'] . "<br>";
echo "Achternaam : " . $_SESSION['achternaam'] . "<br>";

echo "Email : " . $_SESSION['email'] . "<br>";
		if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
			echo "<br>" . "Jij bent een administrator";
		}
?>
</div>