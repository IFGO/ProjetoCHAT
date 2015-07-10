<?php
 include "../dbconnect/mysqlconecta.php";
 include "../dbconnect/mysqlexecuta.php";
session_start();
//$conjconv = $_SESSION['id_empresa'];
date_default_timezone_set('America/Sao_Paulo'); 
$data = date('Y-m-d H:i:s');
$dataformatada = date('H:i:s d/m/Y');

$texto = $_POST['texto'];
$query = mysql_query(/*QUERY*/);
$sqlling = /*QUERY*/
$resling = mysqlexecuta($id,$sqlling);
$rowling = mysql_fetch_array($resling);
//echo "<div class='bubble' style='color: ".$cor."'>".$_SESSION['nome']." disse: <span style='color:black'>".$texto."</span><br><span style='font-size:80%'>".$dataformatada."</span></div><br>";
//		echo "<script>";
    //echo "$('#conteudo').window.scrollTo(0, 5000);";
//echo "</script>";
?>