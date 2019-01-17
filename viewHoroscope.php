<?php
    session_start();
    include "./allHoroscopes.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_SESSION['horoscope'])){
            echo $_SESSION['horoscope'];
        }else {
            echo "<h2>False</h2>";
        }
    }
?>