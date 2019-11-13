<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Formularz</title>
</head>
<body>
<form action="./1.php" method="post">
<label for="a">A: </label>
<input type="number" name="a">
<label for="b">B: </label>
<input type="number" name="b">
<select name="calc">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
<button type="submit">Wyślij</button>
</form>
<?php
/* Zad. 1
Użytkownik podaje w formularzu dane:
    Pole A: number
    Pole B: number
    Wybiera w formularzu działąnie:
        +
        -
        *
        /
        Zapisz dane z formularza do tablicy asocjacyjnej.
        */
        if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['calc'])) {
            $amount = 0;
            switch ($_POST['calc']) {
                case '+':
                    $amount = $_POST['a'] + $_POST['b'];
                break;
                case '-':
                    $amount = $_POST['a'] - $_POST['b'];
                break;
                case '*':
                    $amount = $_POST['a'] * $_POST['b'];
                break;
                case '/':
                    $amount = $_POST['a'] / $_POST['b'];
                break;
                default:
            break;
        }
        echo "<p>$amount</p>";
    }
    ?>
</body>
</html>