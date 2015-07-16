<?php
//script de login e autenticação
include "dbconnect/mysqlconecta.php";
include "dbconnect/mysqlexecuta.php";
$usuario = $_POST['login'];
$password = $_POST['senha'];

$sql = "SELECT * FROM usuarios where nome_usuario = '$usuario' AND senha_usuario = '$password'";
//$validar = mysql_num_rows($sql);
if(true){
$res = mysqlexecuta($id,$sql);
$row = mysqli_fetch_array($res);

$_SESSION['id'] = $row['id'];
$_SESSION['nome'] = $row['nome'];
$_SESSION['sexo'] = $row['sexo_usuario'];
$userid = $row['id'];
$val = 1;
$comando = "UPDATE usuarios SET status_usuario = '$val' WHERE id = '$userid'";
$query = mysqli_query($id,$comando);

header("Location:paginaChat.php");
}else{
    echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
    echo"<script type='text/javascript'>";
        echo "alert('Usuario não encontrado ou senha errada!');";
		echo "window.open=history.go(-1);";
  echo "</script>";

    
}
