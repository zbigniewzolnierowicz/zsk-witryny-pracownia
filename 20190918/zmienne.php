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
        echo "<h1>Składnia nowdoc</h1>";
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
        echo 'Nazwa zmiennej: $city. Wartość zmiennej: ', $city;
    ?>
</body>
</html>