<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>20191007</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="" placeholder="Podaj swoje imię" autofocus>
        <label>R<input type="radio" name="color" id="red" value="r" checked></label>
        <label>G<input type="radio" name="color" id="green" value="g"></label>
        <label>B<input type="radio" name="color" id="blue" value="b"></label>
        <button type="submit">Wyślij</button>
    </form>
    <?php
        if(!empty($_POST['name']) && !empty($_POST['color'])):
            $name = $_POST['name'];
            $color = $_POST['color'];
            echo <<< EOF
                <h3>Ulubiony kolor $name to $color</h3>
            EOF;
        endif;
    ?>
</body>
</html>