<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dołączanie pliku</title>
</head>
<body>
    <h1>Początek pliku</h1>
    <?php
        /* Dołącz, jeśli istnieje, ale nie wymagaj
        include './added/plik.php';
        include_once './added/plik.php';
        */
        require './added/plik.php';
        // require './added/undefined.php';
    ?>
    <h1>Koniec pliku</h1>
</body>
</html>