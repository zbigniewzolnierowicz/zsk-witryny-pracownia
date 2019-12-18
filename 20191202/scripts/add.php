<?php
    if (!empty($_POST['nazwa']) && !empty($_POST['cena']) && !empty($_POST['promocja']) && !empty($_POST['dostawca'])):
    $connection = mysqli_connect('localhost', 'root', '', 'egzamin1');
    $query = "INSERT INTO `towary` (`nazwa`, `cena`, `promocja`, `idDostawcy`) VALUES ($_POST[nazwa], $_POST[cena], $_POST[promocja], $_POST[dostawca])";
    echo "<pre>$query</pre>";
    else:
        header('Location: ../egzamin1-alt/index.php');
    endif;
?>