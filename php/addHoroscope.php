<?php
    session_start();

    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include "allHoroscopes.php";
        
        $month = substr($_POST['birthDate'], 2, 2);
        $day = substr($_POST['birthDate'], 4, 2);

        if(!isset($_SESSION['yourHoroscope'])){
            $_SESSION['yourHoroscope'] = myHoroscope($month, $day);
            echo "true";
        }else {
            echo "false";
        }
    }
?>