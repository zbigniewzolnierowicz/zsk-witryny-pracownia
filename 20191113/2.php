<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/* Zad. 2
    Utwórz licznik na stronie. Wykorzystaj ciasteczka.
*/
if (isset($_COOKIE['counter'])) {
    echo "<p>Stan licznika: " . $_COOKIE['counter'] . "</p>";
    setcookie('counter', $_COOKIE['counter'] + 1);
} else {
    setcookie('counter', 1);
    echo "<p>Pierwszy raz. Tworzę licznik.</p>";
    echo "<p>Stan licznika: " . $_COOKIE['counter'] . "</p>";
}
?>
</body>
</html>