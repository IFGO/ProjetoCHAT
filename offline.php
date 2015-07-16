<?php
include "dbconnect/mysqlconecta.php";
include "dbconnect/mysqlexecuta.php";
$val = 0;
$userid = $_SESSION['id'];
$secval = $_POST['secval'];
if($secval = '1'){
$comando = "UPDATE usuarios SET status_usuario = '$val' WHERE id = '$userid'";
$query = mysqli_query($id,$comando);
}else{
    echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
    echo"<script type='text/javascript'>";
        echo "alert('ERRO!');";
		echo "window.open=history.go(-1);";
  echo "</script>";
}