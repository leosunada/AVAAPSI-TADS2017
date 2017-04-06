<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Login AVAAPSI</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }
        </style>
    </head>
    <body>
        <br>
        <br>
        <br>
        <div class="container jumbotron col-sm-12">
            <div class="col-sm-12" align="center">
                <img src="img/logo.png" width="350">
            </div>
            <div class="col-sm-12" align="center">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <form class="" action="controle/Login.php" method="post">
                        <input type="text" name= "login" class="form-control" placeholder="Usuário" required autofocus>
                        <input type="password" name= "senha" class="form-control" placeholder="Senha" required>
                        <label>
                            <input type="checkbox" value="remember-me"> Lembrar
                        </label>
                        <button class="btn btn-lg btn-success btn-block" name ="logar" type="submit">Entrar</button>
                    </form>
                </div>
                <div class="col-sm-4">
                </div>
            </div>
        </div><!-- /container -->
    </body>
</html>

