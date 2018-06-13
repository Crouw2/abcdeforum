<?php
	include ('dbconnect/db.inc.php');
	if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {

	echo "Dit is de Admin Panel" . "<br><br>";
	echo "↓ Zie hieronder alle users ↓" . 	"<br><br>";
	
	//nog niet werkende
	$allmembers = '
		SELECT *
		FROM users
	';
	$result = f_db_query($server_driver, $allmembers, []);
	$n = 0;
	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<input type='checkbox' name='cname_" . $n . "'>" . $row['username'] . "<br>";
        echo "<input type='hidden' name='user_id_" . $n . "' value='". $row['ID'] . "'>";
       	$n = $n + 1;
    }

} else {
	header("location: index.php");
}
?>
<input type='submit' name="verwijderen" value="verwijderen">
<?php

if (isset($_POST['verwijderen'])) { 
	echo 'hoi';
	$n = 0;
	$naam = 'user_id_' . $n;
		while(isset($_POST[$naam])) {
			$user_id_deze = $_POST[$naam];
			$naam = 'cname_' . $n;
			if(isset($_POST[$naam])) {
				f_db_query($server_driver, 
				"
				DELETE FROM 'users' 
				WHERE ID = 
				:ID
				", [':ID' => $user_id_deze]
				);
			}
			$n = $n + 1;
			$naam = 'user_id_' . $n;
		}

}