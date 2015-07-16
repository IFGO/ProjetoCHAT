<?php
include "../dbconnect/mysqlconecta.php";
include "../dbconnect/mysqlexecuta.php";
$meuid = $_SESSION['id'];
$destid = $_POST['dest'];
@$destnome = $_POST['destn'];

if($meuid < $destid){
    $vetor = array($meuid, $destid);
}else{
    $vetor = array($destid, $meuid);
}

$sql="SELECT id FROM conversa WHERE participanteA = '$vetor[0]' AND participanteB = '$vetor[1]'";
$res = mysqlexecuta($id,$sql);
$row = mysqli_fetch_array($res);
if($row['id']){
    $idconversa = $row['id'];
    $_SESSION['conversa'] = $row['id'];
    $_SESSION['destinatario'] = $destid;
    $sqling = "SELECT * FROM mensagem WHERE conversa = '$idconversa'";
    $resing = mysqlexecuta($id,$sqling);
     while ($rowing = mysqli_fetch_assoc($resing)) {
         $texto = $rowing['mensagem'];
         if($rowing['criador_mensagem'] == $meuid){
             $nome = $_SESSION['nome'];
             echo '<div class="bubble">'.$nome.' disse: '.$texto.'</div><br><br>';
         }else{
             echo '<div class="bubbleb">'.$destnome.' disse: '.$texto.'</div><br><br>';
         }
     }
}else{
     $comando = "INSERT INTO conversa(participanteA,participanteB) VALUES('$vetor[0]','$vetor[1]');";
     $query = mysqli_query($id,$comando);
}

    