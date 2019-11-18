<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>20191118</title>
    <style>
        code {
            white-space: pre;
        }
    </style>
</head>
<body>
    <h1>Składnia alternatywna</h1>
    <?php
        // Instrukcja if
        $x = 2;
        $y = 1;
    ?>
    <h2>Składnia normalna</h2>
<code>
&lt;?php
    if ($x < $y) {
        echo "&lt;p&gt;$x jest mniejsze od $y&lt;/p&gt;";
    } elseif ($x == $y) {
        echo "&lt;p&gt;$x jest równe $y&lt;/p&gt;";
    } else {
        echo "&lt;p&gt;$x jest większe niż $y&lt;/p&gt;";
    }
    switch ($x) {
        case 'value':
            # code...
            break;
        default:
            break;
    }
    for ($i=1; ; $i++) { 
        echo "&lt;p&gt;Zmienna i wynosi: $i&lt;/p&gt;";
        if ($i == 5) {
            break;
        }
    }
    for ($i=1; $i &lt; 10; $i++) { 
        if ($i % 2 == 1) {
            continue;
        } else {
            echo "&lt;p&gt;$i&lt;/p&gt;";
        }
    }
?&gt;
</code>
    <?php
        if ($x < $y) {
            echo "<p>$x jest mniejsze od $y</p>";
        } elseif ($x == $y) {
            echo "<p>$x jest równe $y</p>";
        } else {
            echo "<p>$x jest większe niż $y</p>";
        }
        switch ($x) {
            case 'value':
                # code...
                break;
            default:
                break;
        }
        for ($i=1; ; $i++) { 
            echo "<p>Zmienna i wynosi: $i</p>";
            if ($i == 5) {
                break;
            }
        }
        for ($i=1; $i < 10; $i++) { 
            if ($i % 2 == 1) {
                continue;
            } else {
                echo "<p>$i</p>";
            }
        }
    ?>
    <h2>Składnia alternatywna</h2>
<code>
&lt;?php
    if ($x &lt; $y):
        echo "&lt;p&gt;$x jest mniejsze od $y&lt;/p&gt;";
    elseif ($x == $y):
        echo "&lt;p&gt;$x jest równe $y&lt;/p&gt;";
    else:
        echo "&lt;p&gt;$x jest większe niż $y&lt;/p&gt;";
    endif;
    switch ($x):
        case 'value':
            # code...
            break;
        default:
            break;
    endswitch;
    for ($i=1; ; $i++):
        echo "&lt;p&gt;Zmienna i wynosi: $i&lt;/p&gt;";
        if ($i == 5):
            break;
        endif;
    endfor;
    for ($i=1; $i &lt; 10; $i++):
        if ($i % 2 == 1):
            continue;
        else:
            echo "&lt;p&gt;$i&lt;/p&gt;";
        endif;
    endfor;
?>
</code>
    <?php
        if ($x < $y):
            echo "<p>$x jest mniejsze od $y</p>";
        elseif ($x == $y):
            echo "<p>$x jest równe $y</p>";
        else:
            echo "<p>$x jest większe niż $y</p>";
        endif;
        switch ($x):
            case 'value':
                # code...
                break;
            default:
                break;
        endswitch;
        for ($i=1; ; $i++):
            echo "<p>Zmienna i wynosi: $i</p>";
            if ($i == 5):
                break;
            endif;
        endfor;
        for ($i=1; $i < 10; $i++):
            if ($i % 2 == 1):
                continue;
            else:
                echo "<p>$i</p>";
            endif;
        endfor;
    ?>
</body>
</html>