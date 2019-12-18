<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Egzamin 1ALT - Arkusz E.14-01-19.06</title>
    <style>
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }
    td, th {
        border: 1px solid black;
    }
    form {
        display: flex;
        flex-grow: 0;
        flex-direction: column;
        width: 50vw;
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
        $query = "SELECT `cena` FROM `towary` WHERE `nazwa` = 'Cienkopis'";
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
            <?php
                $query = "SELECT `nazwa` FROM `towary`";
                $result = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['nazwa'] . '">' . $row['nazwa'] .  '</option>';
                }
            ?>
        </select>
        <button type="submit">Submit</button>
    </form>
    <?php
        if (isset($_POST["towar"])):
            $towar = $_POST["towar"];
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
            while ($row = mysqli_fetch_assoc($result)):
                $promocja =  round($row['cena'] * 0.85, 2);
                $cenaBez = $row['cena'];
                echo <<<EOD
                    <tr><td>$cenaBez</td><td>$promocja</td></tr>
                EOD;
            endwhile;
        endif;
        ?>
        </tbody>
    </table>
    <h1>Tabela</h1>
    <table>
        <thead>
            <tr>
                <th>L.p.</th>
                <th>Nazwa produktu</th>
                <th>Cena</th>
                <th>Czy promocja?</th>
                <th>Nazwa dostawcy</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $query = "SELECT `towary`.`id`, `towary`.`nazwa`, `cena`, `promocja`, `dostawcy`.`nazwa` AS `dostawca` FROM `towary` LEFT JOIN `dostawcy` ON `towary`.`idDostawcy` = `dostawcy`.`id` WHERE `towary`.`nazwa` = '" . $_POST['towar'] . "'";
            $result = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[id]</td>";
                echo "<td>$row[nazwa]</td>";
                echo "<td>$row[cena]</td>";
                echo "<td>" . ($row['promocja'] ? 'W promocji' : 'Nie w promocji') . "</td>";
                echo "<td>$row[dostawca]</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
    <hr/>
    <h2>Dodaj produkt</h2>
    <form method="post" action="../scripts/add.php">
        <input type="text" placeholder="Nazwa produktu" name="nazwa">
        <input type="number" placeholder="Cena" name="cena" step="0.1">
        <select name="promocja">
            <option value="0">Nie jest w promocji</option>
            <option value="1">Jest w promocji</option>
        </select>
        <select name="dostawca">
        <?php
            $query = "SELECT `id`, `nazwa` FROM `dostawcy`";
            $result = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($result)):
        ?>
            <option value="<?php echo $row['id'] ?>"><?php echo $row['nazwa'] ?></option>
        <?php
            endwhile;
        ?>
        </select>
        <button type="submit">Wyślij</button>
    </form>
</body>
</html>
<?php
    mysqli_close($connection);
?>