<?php
    include ("database.php");
    session_start();
    if ($_POST['type']==1) {
        # code...
        $nome  = $_POST['nome'];
        $email = $_POST['email'];
        $usuarionome= $_POST['usuarionome'];
        $telefone = $_POST['telefone'];
        $password = $_POST['password'];
        if (!empty($nome) && !empty($email) && !empty($usuarionome) && !empty($telefone) && !empty($password)) {
            # code...
            $duplicate = mysqli_query($conexao, "SELECT * FROM TAB_USUARIOS WHERE email = '$email'");
            $duplicate1= mysqli_query($conexao, "SELECT * FROM TAB_USUARIOS WHERE usuarionome = '$usuarionome'");
            if (mysqli_num_rows($duplicate)>0) {
                # code...
                echo json_encode(array("statusCode"=>201));
            }else if (mysqli_num_rows($duplicate1)>0) {
                # code...
                echo json_encode(array("statusCode"=>202));
            }else {
                # code...
                $sql = "INSERT INTO `TAB_USUARIOS`(`nome`, `email`, `telefone`, `password`, `usuarionome`, `uploaded_on`) 
                VALUES  ('$nome', '$email', '$telefone','".md5($password)."', '$usuarionome', NOW())";

                if (mysqli_query($conexao,$sql)) {
                    # code...
                    echo json_encode(array("statusCode=>200"));
                }else {
                    # code...
                    echo json_encode(array("statusCode=>203"));
                }
            }
            mysqli_close($conexao);
        }else {
            # code...
            echo json_encode(array("statusCode=>204"));
        }
    }
    if ($_POST['type'] ==2) {
        # code...
        $usuarionome = $_POST['usuarionome'];
        $password = $_POST['password'];
        $check = mysqli_query($conexao,"SELECT * FROM tab_usuarios WHERE usuarionome= '$usuarionome' AND password='".md5($password)."'");
        if (mysqli_num_rows($check)>0) {
            # code...
            $_SESSION['usuarionome']=$usuarionome;
            echo json_encode(array("statusCode"=>200));
        }else {
            # code...
            echo json_encode(array("statusCode"=>201));
        }
        mysqli_close($conexao);
    }
?>