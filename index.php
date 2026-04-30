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
<div class="container">
    <h1 class="my-3">Generatore di password</h1>

    <form action="./result.php" method="GET" class="form-control">
        <label for="password-length" class="form-label">Lunghezza password:</label>
        <input type="number" name="password-length" id="password-length" min="6" value="6" class="form-control">
        <div class="my-3">
            <input type="checkbox" name="char-repetition" id="char-repetition" class="form-check-input">
            <label for="char-repetition" class="form-label">Ripeti caratteri</label>
        </div>
        <div class="my-3">
            <input type="checkbox" name="use-letters-lowercase" id="use-letters-lowercase" class="form-check-input">
            <label for="use-letters-lowercase" class="form-label">Escludi lettere minuscole</label>
        </div>
        <div class="my-3">
            <input type="checkbox" name="use-letters-uppercase" id="use-letters-uppercase" class="form-check-input">
            <label for="use-letters-uppercase" class="form-label">Escludi lettere maiuscole</label>
        </div>
        <div class="my-3">
            <input type="checkbox" name="use-numbers" id="use-numbers" class="form-check-input">
            <label for="use-numbers" class="form-label">Escludi numeri</label>
        </div>
        <div class="my-3">
            <input type="checkbox" name="use-simbols" id="use-simbols" class="form-check-input">
            <label for="use-simbols" class="form-label">Escludi simboli</label>
        </div>
        <button type="submit" class="btn btn-primary my-3 d-block">Invia</button>
    </form>
</div>
    
</body>
</html>