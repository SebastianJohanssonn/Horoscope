<?php
    include "./allHoroscopes.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        session_start();
        if(isset($_SESSION['horoscope'])){
            echo $_SESSION['horoscope'];
        }else {
            echo "false";
        }
    }
?>