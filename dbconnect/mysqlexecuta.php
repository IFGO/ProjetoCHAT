<?php
/* 
Esta função executa um comando SQL no banco de dados MySQL
$id – Ponteiro da Conexão 
$sql – Cláusula SQL a executar 
$erro – Especifica se a função exibe ou não(0=não, 1=sim)
$res – Resposta 
*/ 
function mysqlexecuta($id,$sql,$erro = 1) { 
    if(empty($sql) OR !($id)) 
       return 0; //Erro na 
   if (!($res = mysqli_query($id,$sql))) {

      if($erro) 
        echo "Ocorreu
um erro na execução do Comando SQL no banco de dados. Favor
Contactar o Administrador.";
      exit;
   } 
	//echo "Executa com Sucesso!.";
   return $res; 

 }

?>