<?php
//toevoegen van bestanden
	include ('functions.php');
		session_start();
	include ('pagstart.php');
//aangevende functies
	$gekozen = paggekozen();
//de afhandeling van de switch
	switch ($gekozen) {
		case 'topics':
			include ('');
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
				break;x
//default is de index.php startpagina
	default:
				break;
	}

	include ('pageinde.php');
	?>