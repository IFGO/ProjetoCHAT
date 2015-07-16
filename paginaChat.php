<!DOCTYPE HTML>
<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/bootstrap-theme.css" />
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="css/chat.css" />
                <script language="javascript" src="js/jquery-2.1.3.min.js"></script>
		<script src="js/bootstrap.min.js"  type="text/javascript"></script>
                <script src="js/chat.js"  type="text/javascript"></script>
		<title>Página Chat</title>
                <?php
                 include "dbconnect/mysqlconecta.php";
                 include "dbconnect/mysqlexecuta.php";
                ?>
                <script>
                         $(document).ready(function(){
                             
                                  $('#online').attr("src","images/on.png");
                                  $('#offline').attr("src","images/off.png");
                          });
                          
                                                    
                          window.onbeforeunload = closingCode;
                            function closingCode(){
                               $.ajax({
                                type: "POST",
                                url: "offline.php",//setar status offline
                                data: {
                                  secval: '1' // passar valor para 'desligar o usuario'
                                }
                              });
                               return null;
                            }
                            
                            var tempo=setInterval(function () {atualizar_conversa()}, 3000);
                            $("#conteudo").animate({scrollTop: $('#conteudo').prop("scrollHeight")}, 500);   // velocidade do scroll em milisegundos

                </script>

	</head>

	<body>
		<center>
		<!-- MENU-->
		<nav role="navigation" class="navbar navbar-default" >

			<!-- div de navegação responsiva -->
			<div class="navbar-header">
				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
					<span class="sr-only">Navegar</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>	
				<img src="images\logo\logoChat.png" class="navbar-brand" />
			</div>

			<!-- Elementos (menus) para navegação -->
			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">CHAT</a></li>
				</ul>
			</div>
		</nav> 
		<!-- Container primario - Slider -->
		<div class="container" id="container1">			
			<div class="jumbotron" id="BlocoMensagens">
				<div class="row">
				<div class="col-sm-20 col-md-18">
                                    <form name="" onSubmit="return false">
					<div id="conteudo"></div>
					<div id="texto"><input type="text" class="form-control" name="texto" id="mensagem"></div>
                                        <input type="hidden" name="dest" id="destin" value="">
					<div id="enviar"><input type="submit" class="btn btn-primary" onclick="alterar_div()"></div>
                                    </form>
				</div>
				</div>

			</div>
			<div class="jumbotron" id="BlocoUsuarios">
                            <ul>
                                <?php
                                $sql = "SELECT id,nome,status_usuario FROM usuarios";
                                $res = mysqlexecuta($id,$sql);
                                while ($row = mysqli_fetch_assoc($res)) {
                                    $id_dest = $row['id'];
                                    $nome = $row['nome'];
                                    if($row['status_usuario'] == 1){
                                        $status="online"; 
                                    }else{
                                        $status="offline";
                                    }
                                    echo '<li>';?>
                                <img id="<?php echo $status; ?>" src="images/off.png" /><p onclick="selecionar_destinatario('<?php echo $id_dest.",".$nome; ?>');"><?php echo $nome; ?></p><?php
                                echo '</li>';
                                }
                                ?>
                                <a href="logout.php">Sair</a>
                            </ul>
     
      			</div>
                        
		</div>

		</center>
	</body>

</html>