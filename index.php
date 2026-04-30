<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Generatore di password</h1>

<form action="./password.php" method="GET">
    <label for="password-length">Lunghezza password:</label>
    <input type="number" name="password-length" id="password-length" min="6" value="6">
    <button type="submit">Invia</button>
</form>
    
</body>
</html>