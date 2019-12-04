<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Egzamin 1ALT - Arkusz E.14-01-19.06</title>
    <style>
    td, th {
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
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
    ?>
    <h1>Cienkopis</h1>
    <?php
        // Skrypt 2
        $query = "SELECT `cena` FROM `towary` WHERE `nazwa` = 'cienkopis'";
        $result = mysqli_query($connection, $query);
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>" . $row['nazwa'] . "</li>";
        }
        echo "</ul>";
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
            $query = "SELECT `cena` FROM `towary` WHERE `nazwa` = '$towar'";
            $result = mysqli_query($connection, $query);
    ?>
    <table>
        <thead>
            <tr>
                <th>Cena bez promocji</th>
                <th>Cena z promocją</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $promocja =  round($row['cena'] * 0.85, 2);
                $cenaBez = $row['cena'];
                echo <<<EOD
                    <tr><td>$cenaBez</td><td>$promocja</td></tr>
                EOD;
            }
            mysqli_close($connection);
        }
        ?>
        </tbody>
    </table>
</body>
</html>