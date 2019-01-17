<?php
    session_start();
    include "./allHoroscopes.php";
    if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
        if(isset($_SESSION['horoscope'])){
            unset($_SESSION['horoscope']);
            echo "<h2>True</h2>";
        }else {
            echo "<h2>False</h3>";
            exit;
        }
    }
?>