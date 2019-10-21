<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/main.css">    
    <title>20191021 - Do While</title>
</head>
<body>
    <table>
    <?php
        $x = 1;
        $sum1 = 0;
        $sum2 = 0;
        do {
            echo '<tr>';
            $y = 1;
            do {
                if ($x == $y) {
                    $sum1 += + ($x * $y);
                    echo '<td class="diagonal">',$x * $y,'</td>';
                } elseif ($x + $y == 11) {
                    $sum2 += + ($x * $y);
                    echo '<td class="diagonal">',$x * $y,'</td>';
                } else {
                    echo '<td>',$x * $y,'</td>';
                }
                $y += 1;
            } while ($y <= 10);
            $x += 1;
            echo '</tr>';
        } while ($x <= 10);
    ?>
    </table>
    <?php
        echo "<p>Suma elementów na pierwszej przekątnej wynosi $sum1</p>";
        echo "<p>Suma elementów na drugiej przekątnej wynosi $sum2</p>";
    ?>
</body>
</html>
