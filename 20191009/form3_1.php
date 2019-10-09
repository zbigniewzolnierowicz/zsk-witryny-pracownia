<?php
    if (isset($_GET['btn']) && !empty($_GET['kraj'])) {
        $kraj = $_GET['kraj'];
        switch ($kraj) {
            case 'pl':
                $kraj = 'Polska';
                break;
            case 'uk':
                $kraj = 'Wielka Brytania';
                break;
            default:
                header('location: ./form3.php');
                break;
        }
        echo $kraj;
    } else {
        header('location: ./form3.php');
    }
?>