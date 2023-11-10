<?php

$shost= 'localhost';
$user='root';
$pass='';
$db_name='rdc_talk';
$conn= new MySQLi($shost, $user,$pass,$db_name);
if ($conn->connect_error){
    die('database connexion error: '. $conn->connect-error);
}
?>