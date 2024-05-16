<!DOCTYPE html>
<html lang="it">
<head>
    <title>Grigliata Bella!</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <meta charset="UTF-8">

    <link rel="stylesheet" href="styles.css">


</head>
<?php
$nome     = $_POST['nome'];
$presenza = $_POST['presenza'];
$note     = $_POST['note'];

if($nome == "")
    header("location: index.html");

if($note != "")
    $note = 'e ha aggiunto "'.$note.'"';
else $note = '';

if($presenza == "true") $line =  $nome." viene ".$note."\n";
else $line = $nome." non viene ".$note."\n";

$file = "gianni.txt";

file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

echo "<h1 class='thanks'>Grazie ".$nome.", abbiamo ricevuto la tua risposta!!!</h1>";
?>

</html>
