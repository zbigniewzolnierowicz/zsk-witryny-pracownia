<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>20191008</title>
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="" placeholder="Podaj swoje imię" autofocus><br/>
        <input type="number" name="age" placeholder="Podaj swój wiek"><hr/>
        <button type="submit">Wyślij</button>
    </form>
    <?php
        if(!empty($_POST['name']) && !empty($_POST['age'])):
            $name = $_POST['name'];
            $age = $_POST['age'];
            echo <<< EOF
                <h3>Imię przed poprawą: $name</h3>
            EOF;
            echo "<h4>Długość imienia: ", strlen($name), "</h4>";
            $nameFixed = ucfirst(strtolower(substr(trim($name), 0, 10)));
            echo <<< EOF
                <h3>Imię po poprawie: $nameFixed</h3>
            EOF;
            echo "<h4>Długość imienia: ", strlen($nameFixed), "</h4>";
    ?>
        <table>
            <thead>
                <tr>
                    <th>Imię</th>
                    <th>Wiek</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $nameFixed ?></td>
                    <td><?php echo $age ?></td>
                </tr>
            </tbody>
        </table>
    <?php
        endif;
    ?>
</body>
</html>