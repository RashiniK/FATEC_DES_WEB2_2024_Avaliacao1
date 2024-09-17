<?php
session_start();

if(!isset($_SESSION["loggedinC"]) || $_SESSION["loggedinC"] !== true ){
    header("location: logado.php");
    exit;
}

    $filenamedsm = "dsm.txt";
    $filenamege = "ge.txt";

 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
            $_SESSION['lab'] = $_POST['lab'];
            $_SESSION['data'] = $_POST['data'];
            $_SESSION['solicitacao'] = $_POST['solicitacao'];
            $_SESSION['curso'] = $_POST['curso'];


        if($_SESSION['curso']== "DSM"){

        
            if(!file_exists("dsm.txt")){
                $handle = fopen("dsm.txt", "w");
            } else {
                $handle = fopen("dsm.txt", "a");
            }
        

            fwrite($handle, $_SESSION['lab']."|".$_SESSION['data']."|".$_SESSION['solicitacao'].PHP_EOL);

            fflush($handle);
            fclose($handle);
        } else if($_SESSION['curso']=="GE"){
            
            if(!file_exists("GE.txt")){
                $handle = fopen("GE.txt", "w");
            } else {
                $handle = fopen("GE.txt", "a");
            }
        
            fwrite($handle, $_SESSION['lab']."|".$_SESSION['data']."|".$_SESSION['solicitacao'].PHP_EOL);

            fflush($handle);
            fclose($handle);
        }
    
    
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
        <h2>Registro</h2>
        <p>Favor as informações necessarias.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>Laboratório</label>
            <select class="form-control form-control-lg" name="lab">
                <option name="lab1">Laboratório 1</option>
                <option name="lab2">Laboratório 2</option>
                <option name="lab3">Laboratório 3</option>
            </select>
            <label>Prazo limite</label></br>
            <input type="date" name="data" value ="dd/mm/aa" style="margin-bottom:5px;"> </br>

            <label>Solicitação</label></br>
            <input type="text" name="solicitacao" style="margin-bottom:5px;"></br>
            
            <label >Curso Atendido</label>
            <select name="curso" class="form-control form-control-sm">
                <option name="dsm">DSM</option>
                <option name="ge">GE</option>
            </select>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>