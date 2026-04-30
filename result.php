<?php 
require_once "./functions.php";

$repeat_char = false;

if(isset($_GET["char-repetition"]) && $_GET["char-repetition"] === "on") {
    $repeat_char = true;
};

$use_letters_lowercase = true;

if(isset($_GET["use-letters-lowercase"]) && $_GET["use-letters-lowercase"] === "on") {
    $use_letters_lowercase = false;
};

$use_letters_uppercase = true;

if(isset($_GET["use-letters-uppercase"]) && $_GET["use-letters-uppercase"] === "on") {
    $use_letters_uppercase = false;
};

$use_numbers = true;

if(isset($_GET["use-numbers"]) && $_GET["use-numbers"] === "on") {
    $use_numbers = false;
};

$use_simbols = true;

if(isset($_GET["use-simbols"]) && $_GET["use-simbols"] === "on") {
    $use_simbols = false;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center my-5">
        <h1>Ecco la tua password:</h1>
            <p class="fs-4"><span class="p-2"><?php echo generate_password((int) $_GET["password-length"])?></span></p>
    </div>
</body>
</html>