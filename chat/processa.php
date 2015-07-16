<?php
 include "../dbconnect/mysqlconecta.php";
 include "../dbconnect/mysqlexecuta.php";
date_default_timezone_set('America/Sao_Paulo'); 
$data = date('Y-m-d H:i:s');
$dataformatada = date('H:i:s d/m/Y');
$texto = $_POST['texto'];
$conversa = $_SESSION['conversa'];
$meuid = $_SESSION['id'];
$destinatario = $_SESSION['destinatario'];
//começo script de envio ao banco
$envio = "INSERT INTO mensagem (mensagem,conversa,data_envio,criador_mensagem,dest_mensagem) VALUES('$texto','$conversa','$dataformatada','$meuid','$destinatario')";
$query = mysqli_query($id,$envio);
//fim script
echo "<div class='bubble' style='color: blue'>".$_SESSION['nome']." disse: <span style='color:black'>".$texto."</span><br></div>";
    echo "<script>";
    echo "</script>";
