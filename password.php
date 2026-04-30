<?php

function generate_password($length) {

//^ Inizializzo variabili con caratteri minuscoli, maiuscoli, numeri e speciali

    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "1234567890";
    $simbols = "!@#$%^&*()_+-";

//^ Concateno le stringhe

    $all_chars = $lowercase . $uppercase . $numbers . $simbols;

//^ Definisco la variabile password come strimga vuota che andrà riempita di volta in volta con un ciclo

    $password = "";

//^ Apro il cliclo che si ripete fino al numero di volte indicato dall'input dell'utente

    for($i = 0; $i <= $length; $i++) {

    //^ Uso funzione rand per estrarre randomicamente ad ogni ciclo un carattere dalla strimga unica

        $random_char = $all_chars[rand(0, strlen($all_chars) -1 )];

    //^ Ad ogni ciclo prendo il carattere estratto e lo concateno in password

        $password .= $random_char;
    };

//^ Ritorno la password

    return $password;
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Ecco la tua password: <?php echo generate_password((int) $_GET["password-length"])?></h1>
    
</body>
</html>