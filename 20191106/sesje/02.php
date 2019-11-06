<?php
    session_start();
    unset($_SESSION['name']);
    session_destroy();
    $url = "./index.php";
    echo '<script>window.location = "' . $url . '"</script>'
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
    <h1>Witamy <?php if(isset($_SESSION['name'])){ echo $_SESSION['name']; } ?> na stronie.</h1>
    <p>Identyfikator sesji: <?php echo session_id(); ?></p>
    <p><a href="./index.php">Następna strona</a></p>
</body>
</html>