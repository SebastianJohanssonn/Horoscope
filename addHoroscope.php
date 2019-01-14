<?php
    session_start();

    include "./allHoroscopes.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $month = substr($_POST['dateOfBirth'], 1);
        $day = substr($_POST['dateofBirth'], 2, 2);

        if(!isset($_SESSION['horoscope'])){
            $_SESSION['horoscope'] = myHoroscope($month, $day);
            echo "<h3>True</h3>";
        }else {
            echo "<h3>false</h3>";
        }
    }
?>