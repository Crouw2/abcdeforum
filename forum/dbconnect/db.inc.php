<?php
// de database connecties naar de php bestanden

$dbserver = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'forumdb';

//connectie naar db(database)
$db = mysqli_connect($dbserver, $dbuser, $dbpassword, $dbname);



?>