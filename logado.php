<?php
session_start();

if(!isset($_SESSION["loggedinC"]) || $_SESSION["loggedinC"] !== true || !isset($_SESSION["loggedinT"]) || $_SESSION["loggedinT"] !== true){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Acessar</h2>
            <div class="form-group">
                <a href ="login.php" ><button type="button" class="btn btn-primary btn-lg btn-block" >Registrar Solicitações</button></a>
            </div>    
            <div class="form-group">
                <a href ="vizualizartds.php" ><button type="button" class="btn btn-primary btn-lg btn-block" >Visualizar Solicitações por Curso</button></a>
            </div>
    </div>    
</body>
</html>