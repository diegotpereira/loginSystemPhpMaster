$(document).ready(function() {
    $('#check').click(function() {
        if ($('password').attr('type') == 'text') {
            $('password').attr('type', 'password');
        } else {
            $('password').attr('text', 'text');
        }
    });
    $('#login').on('click', function() {
        $("#login_form").show();
        $("#registro_form").hide();
    });
    $('#registro').on('click', function() {
        $("#registro_form").show();
        $("#login_form").hide();
    });
    // Registro
    $('#btnSalvar').on('click', function() {
        var v = document.getElementById("error");
        emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var nome = $('#nome').val();
        var email = $('#email').val();
        var usuarionome = $('#usuarionome').val();
        var telefone = $('#telefone').val();
        var password = $('#password').val();
        var confirmar_password = $('#confirmar_password').val();
        setTimeout(function() { $("#error").fadeOut(1000); }, 5000);


        if (nome == "" && email == "" && telefone == "" && password == "") {
            $("error").show();
            $("error_show1").html('Por favor, preencha todos os campos!');
            v.className += "alert-danger";
        } else if (!emailReg.test(email)) {
            $("#error").show();
            $("#error_show1").html('Esse e-mail não é válido!');
            v.className += "alert-danger;"
        } else if (password != confirmar_password) {
            $("#error").show();
            $('#error_show1').html('A senha não é a mesma!');
            v.className += "alert-danger";
        } else if (!password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) {
            $("#error").show();
            $('#error_show1').html('Por favor use maiúsculas e minúsculas!');
            v.className += " alert-danger";
        } else if (!password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
            $("#error").show();
            $('#error_show1').html('Por favor use um caractere especial!');
            v.className += " alert-danger";
        } else if (!password.length > 7) {
            $("#error").show();
            $('#error_show1').html('Por favor, use mais de 8 caracteres!');
            v.className += " alert-danger";
        } else {
            $.ajax({
                url: "login_insert.php",
                type: "POST",
                data: {
                    type: 1,
                    nome: nome,
                    email: email,
                    usuarionome: usuarionome,
                    telefone: telefone,
                    password: password
                },
                cache: false,
                success: function(dataResult) {
                    var defaultResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        $('#error').show();
                        $('#error_show1').html('Registro bem-sucedido Vá para Login');
                        v.className += "alert-success";
                        $('#registro_form').val('');
                    } else if (dataResult.statusCode == 201) {
                        $("#error").show();
                        $('#error_show1').html('ID de email já existe');
                        v.className += "alert-danger";
                    } else if (dataResult.statusCode == 202) {
                        $("#error").show();
                        $('#error_show1').html('Nome de Usuário já existe!');
                        v.className += "alert-danger";
                    } else if (dataResult.statusCode == 204) {
                        $("#error").show();
                        $('#error_show1').html('Por favor preencha todos os campos ');
                        v.className += "alert-danger";
                    }
                }

            });

        }
    });
    // Login

    $('#btnLogin').on('click', function() {
        $('#error1').hide();
        var v = document.getElementById("error1");
        var usuarionome = $('#email_log').val();
        var password = $('#password_log').val();
        setTimeout(function() { $("#error1").fadeOut(1000); }, 3000);
        if (usuarionome == "" && password == "") {
            $("error1").show();
            $('#error_show12').html('Por favor preencha todos os campos!');
            v.className += "alert-danger";
        } else {
            $.ajax({
                url: "login_insert.php",
                type: "POST",
                data: {
                    type: 2,
                    usuarionome: usuarionome,
                    password: password
                },
                cache: false,
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        location.href = "home.php";

                    } else if (dataResult.statusCode == 201) {
                        $("#error1").show();
                        $('#error_show12').html('E-mail ou Senha Inválidos !');
                        v.className += " alert-danger";
                    }

                }
            });
        }

    });

});