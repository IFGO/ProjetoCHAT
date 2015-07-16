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
$envio = "INSERT INTO mensagem (mensagem,conversa,data_envio,criador_mensagem,dest_mensagem) VALUES('$texto','$conversa','$data','$meuid','$destinatario')";
$query = mysqli_query($id,$envio);
//fim script
echo "<div class='bubble' style='color: blue'>aaaa disse: <span style='color:black'>".$texto."</span><br><span style='font-size:80%'>".$dataformatada."</span></div><br> dest".$destinatario." conv".$conversa."";
    echo "<script>";
   // echo "$('#conteudo').window.scrollTo(0, 5000);";
    echo "</script>";
