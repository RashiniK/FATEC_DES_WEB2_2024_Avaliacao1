<?php
session_start();

if($_SESSION["loggedinC"] == true ){
    
    
}else if(!isset($_SESSION["loggedinT"]) || $_SESSION["loggedinT"] !== true ){
    header("location: index.php");
    
}

$filename = "ge.txt";
$filename = "dsm.txt";

$handle = fopen("dsm.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }


$handle = fopen("ge.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina</title>
</head>
<body>
    <h1>Solicitações</h1>
</body>
</html>