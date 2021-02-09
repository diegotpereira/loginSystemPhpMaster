<?php
   $host="localhost";
   $usuario="root";
   $senha="root";
   $dbNome="db_login_System_Php_Master";

   $conexao = mysqli_connect($host, $usuario, $senha, $dbNome);

   if (!$conexao) {
       # code...
       die('Falha de conexão ao banco de dados' . mysqli_connect_error());
   }else {
       # code...
       #echo "Conexão realizada com sucesso";
   }
?>
