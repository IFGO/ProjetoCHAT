<?php
error_reporting(0);
 include "../dbconnect/mysqlconecta.php";
 include "../dbconnect/mysqlexecuta.php";
session_start();
$validador = 1;
$conjconv = $_SESSION['id_empresa'];
$sql = "SELECT * FROM chat where visualizada_mensagem = '0' AND conjunto_conv = '$conjconv'";
    $res = mysqlexecuta($id,$sql);
	 while ($row = mysql_fetch_assoc($res)) {
	 
				if($row['data_hora_chat'] != "0000-00-00 00:00:00"){
				$data_banco = date_create($row['data_hora_chat']);
				$dataformatada = date_format($data_banco,'H:i:s d/m/Y');
				}else{
				$dataformatada = NULL;
				}
				$idcriador = $row['criador_mensagem'];
				if($row['criador_mensagem'] != $_SESSION['id']){
				$sqlling = "SELECT * FROM funcionarios where id = $idcriador;";
				$resling = mysqlexecuta($id,$sqlling);
				$rowling = mysql_fetch_array($resling);
			$idmensagem = $row['id'];
			$finalizar = mysql_query("UPDATE chat SET visualizada_mensagem = '$validador' WHERE id = '$idmensagem'");
		echo "<div class='bubbleb' style='color: ".$rowling['cor_chat']."'>".$rowling['nome_funcionario']." disse: <span style='color:black'>".$row['mensagem']."</span><br><span style='font-size:80%'>".$dataformatada."</span></div><br>";
		echo "<script>";
    	 echo" $(function() {
  var wtf    = $('#conteudo');
  var height = wtf[0].scrollHeight;
  wtf.scrollTop(height);
});";
echo "</script>";
		}else{
		};
}
?>