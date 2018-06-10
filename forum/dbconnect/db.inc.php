<?php
// de database connecties naar de php bestanden

$dbserver = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'forumdb';

//connectie naar db(database)
$db = mysqli_connect($dbserver, $dbuser, $dbpassword, $dbname);
    $server_driver = new PDO("mysql:host=localhost;dbname=forumdb", $dbuser, $dbpassword, array(
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_EMULATE_PREPARES => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));



function f_db_conn(){
  // maakt connectie met de database
  // als het mislukt, dan die
$dbserver = 'localhost';
$dbuser = "root";
$dbpassword = "";
$dbname = 'forumdb';
$server_driver;


  try{
    $server_driver = new PDO("mysql:host=localhost;dbname=forumdb", $dbuser, $dbpassword, array(
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_EMULATE_PREPARES => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
  }catch(PDOException $e){
    // dit nooit in productie op het scherm zetten
    // wel een nettere foutmelding (bijv. 'Systeemfout, neem contact op met de beheerder (code d102')
    echo "fout bij connectie maken met de database, melding:<br>" . $e->getMessage();
    die();
  }
  return $server_driver;
}

function f_db_query($server_driver, $sql, $args){
  // PDO query uitvoeren
  // eerst prepare, klaar zetten van de sql

  try{
    $result = $server_driver->prepare($sql);
  }catch(PDOException $e){
    // dit nooit in productie op het scherm zetten
    // wel een nettere foutmelding (bijv. 'Systeemfout, neem contact op met de beheerder (code d101')
    echo "fout bij prepare van de query:<br>$sql, melding:<br>" . $e->getMessage();
    die();
  }
  // de argumenten binden aan de query
  foreach ($args as $key => $value){
    // als nummeric, dan andere constante meegeven
    if (is_numeric($value)) {
      $result->bindValue($key, $value, PDO::PARAM_LOB);
    } else {
      $result->bindValue($key, $value, PDO::PARAM_STR);
    }
  }
  // de uitvoering van de query zelf
  try{
    $result->execute();
  }catch(PDOException $e){
    // dit nooit in productie op het scherm zetten
    // wel een nettere foutmelding (bijv. 'Systeemfout, neem contact op met de beheerder (code d102')
    echo "fout bij execute van de query:<br>$sql<br>args:<br>";
    print_r($args);
    echo "<br>melding: " . $e->getMessage();
    echo $e->getMessage();
    die();
  }
  return $result;
}