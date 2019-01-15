<?php
    session_start();
    parse_str(file_get_contents("php://input"), $_PUT);
    include "./allHoroscopes.php";
    
    if ($_SERVER['REQUEST_METHOD'] == 'PUT'){
        $month = substr($_PUT["birthDate"], 2, 2);
        $day = substr($_PUT["birthDate"], 4, 2);
        
        
        if(isset($_SESSION["horoscope"])){
            $_SESSION["horoscope"] = myHoroscope($month, $day);
        }else {
            echo "<h3>False</h3>";
        }      
    }
?>