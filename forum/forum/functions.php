<?php

if (!defined('GOOD_CALL')) {
  die();
} 
//functie paginagekozen
	function paggekozen(){
		$gekozen = '';
	
	if(isset($_GET['pag'])) {
//kijkt naar de pagina over die gekozen is
		$gekozen = $_GET['pag'];
	}
//return stuurt dit terug naar de switch case
	return $gekozen;

	}
// if($pag_gepost !="") {
// 	if(!f_check_token()){
// 		echo "Illegale posting";
// 		die();
// 	}
// }
