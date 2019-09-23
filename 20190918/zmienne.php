<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zmienne</title>
</head>
<body>
    <?php
        $name1 = 'Janusz';
        $name2 = 'Tomasz';
        $name3 = 'Adamsz';
        echo "$name1<br/>"; // * Prints "Janusz"
        echo "";
        echo '$name1<br/>'; // * Prints "$name"
        echo 'Imię: ' . $name1 . '<br/>';
        $integer = 10; // * 10
        $hex = 0xA; // * 10
        $oct = 021; // * 17
        $bin = 0b1010; // * 10
        echo "Integer: $integer<br/>";
        echo "Hex: $hex<br/>";
        echo "Oct: $oct<br/>";
        echo "Binary: $bin<br/>";
        // * Składnia heredoc
        $name = 'Kasia';
        $city = 'Poznań';
        echo "<h1>Składnia heredoc</h1>";
        echo <<< EOF
            Twoje imię to $name.<br/>
            Mieszkasz w $city.<hr/>
        EOF;

        $information = <<< EOF
            Twoje imię to $name.<br/>
            Mieszkasz w $city.<hr/>
        EOF;
        
        echo $information;

        // * Składnia nowdoc

        echo "<h1>Składnia nowdoc</h1>";

        echo <<< 'EOF'
            Twoje imię to $name.<br/>
            Mieszkasz w $city.<hr/>
        EOF;

        $city = 'Gniezno';

        echo "Nazwa zmiennej: \$city. Wartość zmiennej: $city<br/>";
        echo 'Nazwa zmiennej: $city. Wartość zmiennej: ', $city . '<br/>';

        $x = 1;
        $y = 1.0;

        echo gettype($x) . "<br/>";
        echo gettype($y) . "<br/>";

        if ($x === $y)
            echo "Identyczne.<br/>";
        else
            echo "Różne typy danych.<br/>";
        
        $x = 2;

        echo $x++ . "<br/>"; // * 2
        echo ++$x . "<br/>"; // * 4
        echo $x . "<br/>"; // * 4
        $y = $x++;
        echo $y . "<br/>"; // * 4
        $y = ++$x;
        echo $y . "<br/>"; // * 6
        echo ++$y . "<br/>"; // * 7
        echo "<hr/>";
        $text = "123asd";
        echo $text . "<br/>";
        $x = (int)$text;
        echo $x . "<br/>";
        $text1 = -1;
        echo $text1 . "<br/>";
        $x1 = (bool)$text1;
        echo $x1 . "<br/>";
        /*
        * (bool)
        * (int)
        * (float)
        * (string)
        * (array)
        * (object)
        * (unset)
        */
        $text2 = 100;
        echo $text2 . "<br/>";
        $x2 = (unset)$text2;
        echo $x2 . "<br/>";
        echo gettype($x2) . "<br/>";
        $c;
        echo $c . "<br/>";
        echo gettype($c) . "<br/>";

        echo PHP_INT_SIZE . "<br/>";
        $x = 10;
        echo is_int($x); // true
        echo is_bool($x); // false
        echo is_string($x); // false
        echo is_float($x); // false
        echo is_null($x); // false

        echo "<hr/>";
        echo "<h1>Zmienne superglobalne</h1>";
        /*
        * $_GET
        * $_POST
        * $_COOKIE
        * $_FILES
        * $_SESSION
        * $_SERVER
        */
        echo "\$_SERVER['SERVER_PORT'] = " . $_SERVER['SERVER_PORT'] . "<br/>";
        echo "\$_SERVER['SERVER_NAME'] = " . $_SERVER['SERVER_NAME'] . "<br/>";
        echo "\$_SERVER['SCRIPT_NAME'] = " . $_SERVER['SCRIPT_NAME'] . "<br/>";
        echo "\$_SERVER['SERVER_PROTOCOL'] = " . $_SERVER['SERVER_PROTOCOL'] . "<br/>";
        echo "\$_SERVER['DOCUMENT_ROOT'] = " . $_SERVER['DOCUMENT_ROOT'] . "<br/>";
        $lokalizacjaPliku = $_SERVER['DOCUMENT_ROOT'] . $_SERVER['SCRIPT_NAME'];
        echo "Lokalizacja pliku: $lokalizacjaPliku</br>";
        echo "<hr/>";
        echo "<h1>Stałe</h1>";
        // ! Nazwy z dużych liter
        define('NAZWISKO', 'Kowal');
        echo NAZWISKO . "<br/>";
        define('imie', 'Janusz');
        echo imie . "<br/>";
        define('WIEK', 18, true);
        echo WIEK . "<br/>";
        echo wiek . "<br/>";
        define('PI', 3.141592654);
        echo PI . "<br/>";
    ?>
</body>
</html>