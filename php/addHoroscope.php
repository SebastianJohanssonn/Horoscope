<?php
    session_start();

    include "allHoroscopes.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $month = substr($_POST['birthDate'], 0, 1);
        $day = substr($_POST['birthDate'], 2, 2);

        if(!isset($_SESSION['yourHoroscope'])){
            $_SESSION['yourHoroscope'] = myHoroscope($month, $day);
        }
    }
?>