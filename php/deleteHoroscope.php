<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] == "DELETE"){
        if(isset($_SESSION['yourHoroscope'])){
            unset($_SESSION['yourHoroscope']);
            echo "<h3>True</h3>";
        }else {
            echo "<h3>False</h3>";
        }
    }
?>