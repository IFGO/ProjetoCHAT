<?php
//script de login e autenticação
include "dbconnect/mysqlconecta.php";
include "dbconnect/mysqlexecuta.php";


$nome       = $_POST['Nome'];
$sobrenome  = $_POST['Sobrenome'];
$email      = $_POST['e-mail'];
$user       = $_POST['usuario'];
$senha      = $_POST['senha'];
$erro       = 0;

$sql = "insert into cadastro values";
$sql = "('$nome', '$sobrenome', '$email', '$user', '$senha' )";

$resultado = mysql_query($sql);
echo "Usuário cadastrado com sucesso!";







