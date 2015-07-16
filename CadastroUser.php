<?php
include "dbconnect/mysqlconecta.php";
include "dbconnect/mysqlexecuta.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];

     $comando = "INSERT INTO usuarios(nome,senha_usuario,email,nome_usuario) VALUES('$nome','$senha', '$email', '$usuario');";
     $query = mysqli_query($id,$comando);
     
         echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
         echo"<script type='text/javascript'>";
            echo "alert('Usuario Cadastrado com Sucesso!!!');";
	    echo "window.open=history.go(-1);";
         echo "</script>";









