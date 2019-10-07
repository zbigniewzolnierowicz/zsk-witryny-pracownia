<?php
    $text = <<< EOF
        zsk - zespół
        szkół
        komunikacji
    EOF;
    echo '<p>Przed nl2br</p>';
    echo nl2br($text), '<br/>';
    echo '<p>Po nl2br</p>';
    $text = 'janusz';
    echo strtolower($text), "<br/>"; // * Zamiana na małe litery
    echo strtoupper($text), "<br/>"; // * Zamiana na duże litery
    $text = 'anna Janusz Tomek';
    echo $text, '<br/>';
    echo ucfirst($text), "<br/>"; // * Zamiana pierwszej litery na dużą
    $text = 'anna janusz tomek';
    echo $text, '<br/>';
    echo ucwords($text), "<br/>"; // * Zamiana pierwszych liter na duże
    $lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quisquam officiis dolores possimus doloribus tempora omnis voluptatum enim. Incidunt, voluptate? A est maxime culpa dicta tempora nisi beatae fugit odit!';
    echo $lorem, '<br/>';
    $col = wordwrap($lorem, 40, '<br/>');
    echo $col, '<br/>';
    // * Czyszczenie zawartości bufora
    // ob_clean();
    // * Usuwanie białych znaków
    $name = 'janusz';
    $name1 = '  Janusz      ';
    echo 'Długość', $name, ':', strlen($name),'<br/>';
    echo 'Długość', $name1, ':', strlen($name1),'<br/>';
    echo 'Długość po usunięciu spacji z lewej ', ltrim($name1) . ': ', strlen(ltrim($name1)),'<br/>';
    echo 'Długość po usunięciu spacji z prawej ', rtrim($name1) . ': ', strlen(rtrim($name1)),'<br/>';
    echo 'Długość po usunięciu spacji ', trim($name1) . ': ', strlen(trim($name1)),'<br/>';
    // * strstr()
    $address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
    echo $address, '<br/>';
    $search = strstr($address, 'tel');
    echo $search, '<br/>';
    $address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
    $search = strstr($address, 'tel', true);
    echo $search, '<br/>';

    $mail = strstr('zsk@gmail.com', '@');
    echo $mail, '<br/>';
    $mail = strstr('zsk@gmail.com', 64);
    echo $mail, '<br/>';

    // Porównywanie ciągów

    $ciag1 = 'a';
    $ciag2 = 'aa';
    var_dump($ciag1);
    echo '<br/>';
    var_dump($ciag2);
    echo '<br/>';
    echo strcmp($ciag1, $ciag2);
    echo '<br/>';
    echo strcmp('zz', 'zz');
    echo '<br/>';
    echo strcmp($ciag2, $ciag1);
    echo '<br/>';
    
    // Pozycja
    
    $pos = strpos('abcdefg', 'cd');
    echo $pos;
    echo '<br/>';

    // Zadanie 1
    // Sprawdź, czy w ciągu o nazwie text1 znajduje się ciąg text2.

    $text1 = 'abcdabcd';
    $text2 = 'zed';

    if (strpos($text1, $text2) === false) {
        echo $text2, ' nie jest w ', $text1, '<br/>';
    } else {
        echo $text2, ' jest w ', $text1, '<br/>';
    }
    
    // Przetwarzanie ciągów znaków
    $replace = str_replace('zsk', 'szkoła', 'ZSK to najlepsza zsk');
    echo $replace, '<br/>';
    echo substr('Janusz Kowalski', 3) . '<br/>'; // usz Kowalski
    echo substr('Janusz Kowalski', -3) . '<br/>'; // ski
    echo substr('Janusz Kowalski', 7, 5) . '<br/>'; // Kowal
    echo substr('Janusz Kowalski', -8, -3) . '<br/>'; // Kowal
    echo substr('Janusz Kowalski', -8, 5) . '<br/>'; // Kowal

    // Zamiana poslkich znaków
    $login = 'żąkil';
    $censor = array('ż','Ż','ą','Ą','ć', 'Ć');
    $replace = array('z','Z','a','A','c', 'C');
    $newLogin = str_replace($censor, $replace, $login);
    echo "Login przed: $login<br/>Login po: $newLogin<br/>";
    ob_clean();
    /*
        Napisz aplikację cenzurującą zdanie podane przez użytkownika.
        Użytkownik podaje dane z formularza.
        Zamień słowa "biały", "czarny" na ciąg znaków **#####**
        Wyświetl dane w formacie:
            Dane pobrane od użytkownika: <dane>
            Poprawione dane: <dane>
    */
    echo <<< FORM
        <form method="post">
            <input type="text" name="dane" placeholder="Wpisz dane"><br/><br/>
            <button type="submit">Zatwierdź</button>
        </form>
    FORM;
    if (isset($_POST['dane'])):
        $data = $_POST['dane'];
        $toReplace = array('biały', 'czarny');
        $replacer = '**#####**';
        $replaced = str_ireplace($toReplace, $replacer, $data);
        echo <<< RESULT
            <div>
                <h1>Dane pobrane od użytkownika</h1>
                <p>$data</p>
                <h1>Dane poprawione</h1>
                <p>$replaced</p>
            </div>
        RESULT;
    endif;
?>