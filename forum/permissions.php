<?php
	include ('dbconnect/db.inc.php');

if (isset($_GET)) {
	$admin = f_db_query("SELECT * FROM users WHERE role=:admin", [':admin' => $admin]);








?>