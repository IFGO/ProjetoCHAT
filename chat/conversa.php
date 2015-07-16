<?php
 include "../dbconnect/mysqlconecta.php";
 include "../dbconnect/mysqlexecuta.php";
 echo '<script language="javascript" src="../js/jquery-2.1.3.min.js"></script>';
    $idconversa = $_SESSION['conversa'];
    $meuid = $_SESSION['id'];
    @$destin = $_POST['textodestin'];
    $sqling = "SELECT * FROM mensagem WHERE conversa = '$idconversa' AND visualizado = 0";
    $resing = mysqlexecuta($id,$sqling);
     while ($rowing = mysqli_fetch_assoc($resing)) {
         if($rowing['criador_mensagem'] != $_SESSION['id']){
         $texto = $rowing['mensagem'];
         $idcriador = $rowing['criador_mensagem'];
         $idmensagem = $rowing['id'];
         $sql="SELECT nome FROM usuarios WHERE id = '$idcriador'";
         $res = mysqlexecuta($id,$sql);
         $row = mysqli_fetch_array($res);
            if($rowing['dest_mensagem'] != $destin){
             echo '<div class="bubbleb">'.$row['nome'].' disse: '.$texto.'</div><br><br>';
             $comando = "UPDATE mensagem SET visualizado = 1 WHERE id = '$idmensagem'";
             $query = mysqli_query($id,$comando);
            }
         }else{
            return NULL; 
         }

     }