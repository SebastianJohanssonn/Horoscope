<?php
    session_start();

    include "./allHoroscopes.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $month = substr($_POST['birthDate'], 2, 2);
        $day = substr($_POST['birthDate'], 4, 2);

        if(!isset($_SESSION['horoscope'])){
            $_SESSION['horoscope'] = myHoroscope($month, $day);
        }else {
            $_SESSION['horoscope'] = "<h2>False</h2>";
        }
    }
?>