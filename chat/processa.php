<?php
 include "../dbconnect/mysqlconecta.php";
 include "../dbconnect/mysqlexecuta.php";
date_default_timezone_set('America/Sao_Paulo'); 
$data = date('Y-m-d H:i:s');
$dataformatada = date('H:i:s d/m/Y');
$texto = $_POST['texto'];
//começo script de envio ao banco
$envio = mysqli_query("INSERT INTO mensagem (mensagem,conversa,data_envio,criador_mensagem) VALUES('$texto',)");

//fim script
echo "<div class='bubble' style='color: blue'>aaaa disse: <span style='color:black'>".$texto."</span><br><span style='font-size:80%'>".$dataformatada."</span></div><br>";
    echo "<script>";
    echo "$('#conteudo').window.scrollTo(0, 5000);";
    echo "</script>";
