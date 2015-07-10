<?php
 include "../dbconnect/mysqlconecta.php";
 include "../dbconnect/mysqlexecuta.php";
session_start();

//$validador = 1;
//$conjconv =$_SESSION['id_empresa'];
//$nome = $_SESSION['nome'];
$sql = /*QUERY*/
    $res = mysqlexecuta($id,$sql);
	 while ($row = mysql_fetch_assoc($res)) {
				$idcriador = $row['criador_mensagem'];
				if($row['criador_mensagem'] != $_SESSION['id']){
				$sqlling = /*QUERY*/
				$resling = mysqlexecuta($id,$sqlling);
				$rowling = mysql_fetch_array($resling);
			$idmensagem = $row['id'];
			$finalizar = mysql_query(/*QUERY*/);
		echo $rowling['nome_funcionario']." disse: ".$row['mensagem']."<br>";
		}else{
		echo $nome." disse: ".$row['mensagem']."<br>";
		};

}
?>