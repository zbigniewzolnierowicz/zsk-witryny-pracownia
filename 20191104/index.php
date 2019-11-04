<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>20191104 - Tablice</title>
</head>
<body>
    <h2>Tablice indeksowane</h2>
    <?php
        function wypisz(Array $tab)
        {
            echo '<ul>';
            for ($i=0; $i < count($tab); $i++) { 
                echo <<< EOD
                    <li>Element $i: $tab[$i]</li>
                EOD;
            }
            echo '</ul>';
        }
        $kolory = array('white', 'green', 'black');
        echo '<ul>';
        for ($i=0; $i < count($kolory); $i++) { 
            echo <<< EOD
                <li>Element $i: $kolory[$i]</li>
            EOD;
        }
        echo '</ul>';
        wypisz($kolory);
    ?>
    <h2>Tablice asocjacyjne</h2>
    <?php
        $data = array(
            'imie' => 'Zbigniew',
            'nazwisko' => 'Żołnierowicz',
            'wiek' => 19,
            'narodowosc' => 'Polska'
        );
        echo '<h3>Zawartość tablicy o nazwie $data (heredoc)</h3>';
        echo <<< EOD
            <ul>
                <li>Imię: $data[imie]</li>
                <li>Nazwisko: $data[nazwisko]</li>
                <li>Wiek: $data[wiek]</li>
                <li>Narodowość: $data[narodowosc]</li>
            </ul>
        EOD;
        echo '<h3>Zawartość tablicy o nazwie $data (foreach)</h3>';
        echo '<h4>Bez key => value</h4>';
        echo '<ul>';
        foreach ($data as $value) {
            echo "<li>wartość: $value</li>";
        }
        echo '</ul>';
        echo '<h4>Z key => value</h4>';
        echo '<ul>';
        foreach ($data as $key => $value) {
            echo "<li>$key: $value</li>";
        }
        echo '</ul>';
        echo '<h2>Tablice wielowymiarowe indeksowane</h2>';
        $uczniowie = array(
            array(
                'Zbigniew', 'Żołnierowicz', 19
            ),
            array(
                'Andrzej', 'Żołnierowicz', 28
            ),
            array(
                'Bogdan', 'Żołnierowicz', 35
                )
        );
        echo '<h3>Używając for</h3>';
        for ($x=0; $x < count($uczniowie); $x++) { 
            echo "<h4>Uczeń $x</h4>";
            echo "<ul>";
            for ($y=0; $y < count($uczniowie[$x]); $y++) { 
                echo '<li>' . $uczniowie[$x][$y] . '</li>';
            }
            echo "</ul>";
        }
        echo '<h3>Używając foreach</h3>';
        foreach ($uczniowie as $index => $uczen) { 
            echo "<h4>Uczeń $index</h4>";
            echo "<ul>";
            foreach ($uczen as $dana) {
                echo '<li>' . $dana . '</li>';
            }
            echo "</ul>";
        }
        echo '<h2>Tablica trójwymiarowa</h2>';
        $coordinates = array(
            array(
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
            ),
            array(
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
            ),
            array(
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
            ),
            array(
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
            ),
            array(
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
                array(
                    0, 1, 2, 3, 4
                ),
            )
        );
        function arrayread3d(Array $tab)
        {
            for ($x=0; $x < count($tab); $x++) {
                for ($y=0; $y < count($tab[$x]); $y++) { 
                    for ($z=0; $z < count($tab[$x][$y]); $z++) { 
                        echo <<< EOD
                            <ul>
                                <li>Wartość na \$tab[$x][$y][$z]: $tab[$x][$y][$z]</li>
                            </ul>
                        EOD;
                    }
                }
            }
        }
        arrayread3d($coordinates);
    ?>
</body>
</html>