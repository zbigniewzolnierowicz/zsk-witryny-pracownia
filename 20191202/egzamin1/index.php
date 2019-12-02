<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Egzamin 1 - Arkusz E.14-01-19.06</title>
</head>
<body>
    <?php
    
        // Skrypt 1
        $connection = mysqli_connect('localhost', 'root', '', 'egzamin1');

        $result = mysqli_query($connection, "SELECT `nazwa` , `promocja` FROM `towary` WHERE `promocja`=1");
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>" . $row['nazwa'] . "</li>";
        }
        echo "<ul>";
        mysqli_close($connection);
        // Skrypt 2
        $connection = mysqli_connect('localhost', 'root', '', 'egzamin1');
        mysqli_close($connection);
    ?>
</body>
</html>