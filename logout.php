<?php
 include "dbconnect/mysqlconecta.php";
 include "dbconnect/mysqlexecuta.php";
$val = 0;
$userid = $_SESSION['id'];
$comando = "UPDATE usuarios SET status_usuario = '$val' WHERE id = '$userid'";
$query = mysqli_query($id,$comando);
session_destroy();
header("Location:index.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

