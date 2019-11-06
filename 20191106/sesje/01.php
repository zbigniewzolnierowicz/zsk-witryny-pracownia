<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesja</title>
</head>
<body>
    <h1>Witamy <?php echo $_SESSION['name']; ?> na stronie.</h1>
    <p>Identyfikator sesji: <?php echo session_id(); ?></p>
    <p><a href="./02.php">Następna strona</a></p>
</body>
</html>