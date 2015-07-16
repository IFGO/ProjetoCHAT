<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ProjetoCHAT</title>
        <meta http-equiv="content-type" content="text/html" charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/index.css" />
	<link rel="stylesheet" href="css/bootstrap-theme.css" />
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    <div class="container" id="paginaIndex">
	<center>
                            <div id="formulario"> 
					<form class="form-signin" method="POST" action="login.php" style="margin-top: 23%;">
                                                <img id="logo" src="images/logo/logoChat.png" />						
                                                <h3 class="form-signin-heading">Faça seu login:</h3>
                                                <input class="form-control" placeholder="Usuário" required="" autofocus="" contenteditable="false" type="text" name="login">
						<input class="form-control" placeholder="Password" required="" autofocus="" contenteditable="false" type="password" name="senha">
                                                
                                                <label><a href="cadastro.html">Cadastrar-me<a></label>
                                                <br><br>
						<input class="btn btn-lg btn-primary btn-block" type="submit" value="Entrar">
					</form>
			    </div>
	</center>
    </div>
</body>
</html>
