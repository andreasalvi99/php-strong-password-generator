<?php

function generate_password($length) {

//^ Inizializzo variabili con caratteri minuscoli, maiuscoli, numeri e speciali

    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "1234567890";
    $simbols = "!@#$%^&*()_+-";

//^ Globalizzo le variabili switch

    global $repeat_char;
    global $use_letters_lowercase;
    global $use_letters_uppercase;
    global $use_numbers;
    global $use_simbols;

//^ Setto la stringa unica come stringa vuota

    $all_chars = "";

//^ Concateno le stringhe in base ai flag dell'utente

    if($use_letters_lowercase) {
        $all_chars .= $lowercase;
    };
    
    if($use_letters_uppercase) {
        $all_chars .= $uppercase;
    };
    
    if($use_numbers) {
        $all_chars .= $numbers;
    };
    
    if($use_simbols) {
        $all_chars .= $simbols;
    };

//^ Definisco la variabile password come strimga vuota che andrà riempita di volta in volta con un ciclo

    $password = "";

//^ Se l'uente ha flaggato tutto allora è impossibile generare una password
        
    if($all_chars === "") {
        echo "Impossibile generare password";
        return;
    };

//^ Apro il cliclo che si ripete fino a che la password non ha la lunghezza data dall'utente

    while(strlen($password) < $length) {


    //^ Uso funzione rand per estrarre randomicamente ad ogni ciclo un carattere dalla strimga unica

        $random_char = $all_chars[rand(0, strlen($all_chars) -1 )];

        //^ Se ripeti caratteri non è flaggato

        if(!$repeat_char) {

            //^ E se la password contiene già il carattere corrente, allora salta iterazione

            if(str_contains($password, $random_char)) {
               continue;
            };
        };

    //^ Ad ogni ciclo prendo il carattere estratto e lo concateno in password

        $password .= $random_char;
    };

//^ Ritorno la password

    return $password;
};

?>
