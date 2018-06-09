<?php
//hieronder word de database geinclude
include ('dbconnect/db.inc.php');
//Nieuwe variable linktonen
	$linktonen = 'nee';
//Als de wachtwoord vergeten knop is ingedrukt
	if (isset($_POST['wwvervolg'])) {
//de variabelen bruikbaar laten maken
		$email = mysqli_real_escape_string($db, $_POST['email']);
//kijkt of het email voorkomt in de database			
		$sql = "SELECT * FROM users WHERE email = '$email'";
//Bij result voert die deze query uit
		$result = mysqli_query($db, $sql);
//Kijkt of beiden gelijk zijn aan het getal
			if(mysqli_num_rows($result) === 1){
				$linktonen = 'ja'; 
				$row = mysqli_fetch_assoc($result);
			}else {
				echo "Deze email klopt niet";
			}
	}																






?>







<!-- Hieronder komt de login input velden	-->
<form action="?pag=wwvergeten" method="post">
	<h2>Wachtwoord Vergeten</h2>
	<input type="text" name="email" placeholder="Email" required><br>
	<input type="submit" name="wwvervolg"><br>
	<?php
		if($linktonen == 'ja'){
			echo "<a href=\"?pag=vergetenvervolg&id=" . $row['ID'] . "\">Klik voor reset</a>";
		}
	?>
</form>