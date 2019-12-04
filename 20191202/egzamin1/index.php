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
        echo "</ul>";
        mysqli_close($connection);
    ?>
    <h1>Cienkopis</h1>
    <?php
        // Skrypt 2
        $connection = mysqli_connect('localhost', 'root', '', 'egzamin1');
        $query = "SELECT `cena` FROM `towary` WHERE `nazwa` = 'cienkopis'";
        $result = mysqli_query($connection, $query);
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>" . $row['nazwa'] . "</li>";
        }
        echo "</ul>";
        mysqli_close($connection);
    ?>
    <h1>Zgodnie z listą</h1>
    <form method="post">
        <select name="towar" id="towar">
            <option value="m">Marchew</option>
            <option value="c">Cebula</option>
            <option value="p">Pomelo</option>
            <option value="s">Śliwka</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    <?php
        if (isset($_POST["towar"])) {
            $towar = $_POST["towar"];
            switch ($towar) {
                case 'm':
                    $towar = 'Marchew';
                    break;
                case 'c':
                    $towar = 'Cebula';
                    break;
                case 'p':
                    $towar = 'Pomelo';
                    break;
                case 's':
                    $towar = 'Śliwka';
                    break;
                default:
                    break;
            }
            $connection = mysqli_connect('localhost', 'root', '', 'egzamin1');
            $query = "SELECT `cena` FROM `towary` WHERE `nazwa` = '$towar'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
            $promocja =  round($row['cena'] * 0.85, 2);
            echo "<p>" . $promocja . "</p>";
            mysqli_close($connection);
        }
    ?>
</body>
</html>