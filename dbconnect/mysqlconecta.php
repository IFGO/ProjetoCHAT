<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
$dbname="dbchat"; 
$usuario="root"; 
$password="";
$servidor = "localhost";
$id = new mysqli($servidor, $usuario, $password, $dbname); 
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
$id->set_charset('utf8');
ini_set('default_charset','UTF-8');
?>