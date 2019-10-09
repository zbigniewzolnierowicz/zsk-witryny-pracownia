<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>20191009</title>
</head>
<body>
    <?php
        if (!empty($_GET['name'])) {
            echo $_GET['name'];
        } else {
    ?>
    <form method="get">
        <input type="text" name="name" autofocus>
        <br>
        <button type="submit">Send</button>
    </form>
    <?php
        }
    ?>
</body>
</html>