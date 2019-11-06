<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>20191106</title>
</head>
<body>
    <h1>Sortowanie</h1>
    <?php
        function display(Array $tab)
        {
            echo "<pre>";
            print_r($tab);
            echo "</pre>";
        }
        echo '<h2>Tablica z liczbami</h2>';
        $tab = array(10, 1, 5, 75, -4, 100);
        display($tab);
        echo '<h3>sort()</h3>';
        sort($tab);
        display($tab);
        echo '<h3>rsort()</h3>';
        rsort($tab);
        display($tab);
        echo '<h3>rsort()</h3>';
        echo '<h2>Tablica z ciągami znaków</h2>';
        $names = array('Anna', 'Zenon', 'Czesław');
        display($names);
        echo '<h3>sort()</h3>';
        sort($names);
        display($names);
        echo '<h2>Tablica asocjacyjna</h2>';
        $tabAssoc = array(
            'imie' => 'Zenon',
            'nazwisko' =>'Nowak',
            'wiek' => 30
        );
        display($tabAssoc);
        echo '<h3>asort()</h3>';
        asort($tabAssoc);
        display($tabAssoc);
        echo '<h3>ksort()</h3>';
        ksort($tabAssoc);
        display($tabAssoc);
        echo '<h3>krsort()</h3>';
        krsort($tabAssoc);
        display($tabAssoc);
        echo '<h3>arsort()</h3>';
        arsort($tabAssoc);
        display($tabAssoc);
        echo '<h2>Wyświetlanie typów</h2>';
        echo "<p>Typ \$tabAssoc['imie'] ", gettype($tabAssoc['imie']), '</p>';
        echo "<p>Typ \$tabAssoc['wiek'] ", gettype($tabAssoc['wiek']), '</p>';
    ?>
</body>
</html>