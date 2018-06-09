<?php 
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
