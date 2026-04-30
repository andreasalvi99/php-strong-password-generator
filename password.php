<?php 

function generate_password(string $length) {
    return "La tua password sarà di $length caratteri";
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

<h1>Ecco la tua password: <?php echo generate_password($_GET["password-length"])?></h1>
    
</body>
</html>