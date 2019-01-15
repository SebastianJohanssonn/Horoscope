<?php
    session_start();
    include "./allHoroscopes.php";
    if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
        if(isset($_SESSION['horoscope'])){
            unset($_SESSION['horoscope']);
            echo "<h3>True</h3>";
        }else {
            echo "<h3>False</h3>";
            exit;
        }
    }
?>