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
        function getAgeInfo(Array $ages)
        {
            $sum = 0;
            foreach ($ages as $value) {
                $sum += $value;
            }
            $average = $sum / sizeof($ages);
            return Array('max' => max($ages), 'min' => min($ages), 'avg' => $average);
        }
        if (isset($_POST['amount'])) {
            echo "<form action=\"index.php\" method=\"post\">";
            for ($i=0; $i < $_POST['amount']; $i++) { 
                echo "<input type=\"number\" name=\"age$i\">";
            }
            echo "<button type=\"submit\">Oblicz</button>";
            echo "</form>";
        }
        elseif (isset($_POST['age0'])) {
            $i = 0;
            $output = Array();
            while (isset($_POST["age$i"])) {
                array_push($output, $_POST["age$i"]);
                $i += 1;
            }
            $data = getAgeInfo($output);
            $averageAge = $data['avg'];
            $maxAge = $data['max'];
            $minAge = $data['min'];
            echo <<< EOD
                <ul>
                    <li>Średni wiek: $averageAge</li>
                    <li>Najmłodsza osoba ma $minAge lat.</li>
                    <li>Najstarsza osoba ma $maxAge lat.</li>
                </ul>
            EOD;
        } else {
            echo <<< EOD
                <form action="index.php" method="post">
                    <input type="number" name="amount" min="1" max="70" id="">
                    <button type="submit">Wyślij</button>
                </form>
            EOD;
        }
        print_r($_POST);
    ?>
</body>
</html>