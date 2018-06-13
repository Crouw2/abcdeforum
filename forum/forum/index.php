<?php
define ("GOOD_CALL", "yes");
header('Made_by: Mike');

//toevoegen van bestanden
	include ('functions.php');
	include ('functions_safe.php');	
		session_start();
	include ('pagstart.php');
//aangevende functies
	$gekozen = paggekozen();
//de afhandeling van de switch
	switch ($gekozen) {
		case 'topics':
			include ('topiccreator.php');
				break;
		case 'profile':
			include ('profile.php');
				break;
		case 'login';
			include ('login.php');
				break;
		case 'registreren';
			include ('registreren.php');
				break;
		case 'wwvergeten';
			include ('vergeten.php');
				break;
		case 'vergetenvervolg';
			include ('vergetenvervolg.php');
				break;
		case 'succesww';
			include ('vergetenvervolg.php');
				break;
		case 'nchanger';
			include ('namechanger.php');
				break;
		case 'admin';
			include ('admin/adminwt.php');
				break;
//default is de index.php startpagina
	default:
				break;
	}

	include ('pageinde.php');
	
	//met de json hieronder worden alle $_SESSION variabelen aangegeven
	// echo json_encode($_SESSION);
	?>