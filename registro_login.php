<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php include("header.php");?>
    <link rel="stylesheet" href="css/login_style.css">
</head>
<body class="form-v2 page-content">
    <div class="form-v2-content">
        <div class="form-detail">
            <div class="mb-5 mt-3" style="text-align: center;">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-danger" id="registro">Adicionar</button>
                    <button type="button" class="btn btn-primary" id="login">Logar</button>
                </div>
            </div>
            <form id="registro_form" name="form1" method="post">
                <div class="alert" id="error" role="alert" style="display: none;">
                    <div><a href="#" class="close" data-dismiss="alert" aria-label="close">X</a></div>
                    <div class="error_show" id="error_show1"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="nome" placeholder="Por Favor Digite seu Nome" name="nome">
                </div>
                <div class="form-group">
                    <input type="usuarionome" class="form-control" id="usuarionome" placeholder="Por Favor Digite seu Nome de Usuário" name="usuarionome">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Por Favor Digite seu E-mail" name="email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="telefone" placeholder="Por Favor Digite seu Telefone" name="telefone">
                </div>
                    <input type="password" class="form-control" id="password" placeholder="Por Favor Digite sua Senha" name="password">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check" style="width: 3%; -webkit-appearance: checkbox;">
                        <label class="form-check-label" for="gridCheck">Ver Senha</label>
                    </div>
                </div>
                <input type="password" class="form-control" id="confirmar_password" placeholder="Por Favor confirme sua senha" name="confirmar_password">
                <div class="mb-3"></div>                    
                <input type="button" name="salvar" class="btn btn-primary" value="Registrar" id="btnSalvar">
            </form>
            <form id="login_form" name="form1" method="post" style="display:none;">
               <div class="alert" id="error1" role="alert" style="display:none;">
                  <div><a href="#" class="close" data-dismiss="alert" aria-label="close">X</a></div>
                  <div class="error_show" id="error_show12"></div>
               </div>
               <div class="form-group">
                  <label for="pwd">Nome de Usuário</label>
                  <input type="usuarionome" class="form-control" id="email_log" placeholder="E-mail" name="usuarionome">
               </div>
               <div class="form-group">
                   <label for="pwd">Senha:</label>
                   <input type="password" class="form-control" id="password_log" placeholder="Password" name="password">
               </div>
               <input type="button" name="salvar" class="btn btn-primary" value="Login" id="btnLogin">
            </form>
        </div>
    </div>
</body>
</html>
<script src="js/buscar.js"></script>