<?php include('auth.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include ('header.php'); ?>
</head>
<body>
    <div class="container text-center p-5 m-5">
        <div class="p-5 display-1 text-center" style="font-family: 'Sigmar One', cursive;">Olá, Sr</div>
        <div class="p-5 display-4 text-center" style="font-family: 'Sigmar One', cursive;">Como vai?</div>
        <div class="btn btn-primary btn-outline-primary rounded-pill btn-lg font-weigth-bolder">
            <a href="logout.php" class="text-white text-center"><p>Logout</p></a>
        </div>    
    </div>
</body>
</html>