<?php
 include "../dbconnect/mysqlconecta.php";
 include "../dbconnect/mysqlexecuta.php";
    $idconversa = $_SESSION['conversa'];
    $meuid = $_SESSION['id'];
    $sqling = "SELECT * FROM mensagem WHERE conversa = '$idconversa' AND visualizado = 0 AND criador_mensagem != '$meuid'";
    $resing = mysqlexecuta($id,$sqling);
     while ($rowing = mysqli_fetch_assoc($resing)) {
         $texto = $rowing['mensagem'];
         $idcriador = $rowing['criador_mensagem'];
         $idmensagem = $rowing['id'];
         $sql="SELECT nome FROM usuarios WHERE id = '$idcriador'";
         $res = mysqlexecuta($id,$sql);
         $row = mysqli_fetch_array($res);
             echo '<div class="bubble">'.$row['nome'].' disse: '.$texto.'</div><br><br>';
             $comando = "UPDATE mensagem SET visualizado = 1 WHERE id = '$idmensagem'";
             $query = mysqli_query($id,$comando);

     }