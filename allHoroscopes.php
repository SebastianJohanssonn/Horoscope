<?php
    /*Function that stores all of the signs in an array as key => value pairs and sends 
    the correct one for that date.*/
    function myHoroscope($month, $day){
        //FM = First month. LM = Last month, FD = First day. LD = Last day.
        $allHoroscopes = array(
            "vattumannenFM" => 1,   "vattumannenLM" => 2,  "vattumannenFD" => 21,  "vattumannenLD" => 18,
            "fiskarnaFM"    => 2,   "fiskarnaLM"    => 3,  "fiskarnaFD"    => 19,  "fiskarnaLD"    => 20,
            "vädurenFM"     => 3,   "vädurenLM"     => 4,  "vädurenFD"     => 21,  "vädurenLD"     => 20,
            "oxenFM"        => 4,   "oxenLM"        => 5,  "oxenFD"        => 21,  "oxenLD"        => 21,
            "tvillingFM"    => 5,   "tvillingLM"    => 6,  "tvillingFD"    => 22,  "tvillingLD"    => 21,
            "kräftanFM"     => 6,   "kräftanLM"     => 7,  "kräftanFD"     => 22,  "kräftanLD"     => 22,
            "lejonetFM"     => 7,   "lejonetLM"     => 8,  "lejonetFD"     => 23,  "lejonetLD"     => 23,
            "jungfrunFM"    => 8,   "jungfrunLM"    => 9,  "jungfrunFD"    => 24,  "jungfrunLD"    => 22,
            "vågenFM"       => 9,   "vågenLM"       => 10, "vågenFD"       => 23,  "vågenLD"       => 23,
            "skorpionenFM"  => 10,  "skorpionenLM"  => 11, "skorpionenFD"  => 24,  "skorpionenLD"  => 22,
            "skyttenFM"     => 11,  "skyttenLM"     => 12, "skyttenFD"     => 23,  "skyttenLD"     => 21,
            "stenbockenFM"  => 12,  "stenbockenLM"  => 1,  "stenbockenFD"  => 22,  "stenbockenLD"  => 20
            
        );

        //Second part of the function, checking wich sign you are using if statements.
        if($month == $allHoroscopes["vattumannenFM"] && $day >= $allHoroscopes["vattumannenFD"] 
        || $month == $allHoroscopes["vattumannenLM"] && $day <= $allHoroscopes["vattumannenLD"]){
            $horoscope = "<h2>Vattuman</h2>" . '<img src="images/Vattuman.png" class="signImage">' ;
        }
        if($month == $allHoroscopes["fiskarnaFM"] && $day >= $allHoroscopes["fiskarnaFD"] 
        || $month == $allHoroscopes["fiskarnaLM"] && $day <= $allHoroscopes["fiskarnaLD"]){
            $horoscope = "<h2>Fisk</h2>" . '<img src="images/fiskarna.png" class="signImage">';
        }
        if($month == $allHoroscopes["vädurenFM"] && $day >= $allHoroscopes["vädurenFD"] 
        || $month == $allHoroscopes["vädurenLM"] && $day <= $allHoroscopes["vädurenLD"]){
            $horoscope = "<h2>Vädur</h2>" . '<img src="images/väduren.png" class="signImage">';
        }
        if($month == $allHoroscopes["oxenFM"] && $day >= $allHoroscopes["oxenFD"] 
        || $month == $allHoroscopes["oxenLM"] && $day <= $allHoroscopes["oxenLD"]){
            $horoscope = "<h2>Oxe</h2>" . '<img src="images/oxen.png" class="signImage">';
        }
        if($month == $allHoroscopes["tvillingFM"] && $day >= $allHoroscopes["tvillingFD"] 
        || $month == $allHoroscopes["tvillingLM"] && $day <= $allHoroscopes["tvillingLD"]){
            $horoscope = "<h2>Tvilling</h2>" . '<img src="images/tvillingarna.png" class="signImage">';
        }
        if($month == $allHoroscopes["kräftanFM"] && $day >= $allHoroscopes["kräftanFD"] 
        || $month == $allHoroscopes["kräftanLM"] && $day <= $allHoroscopes["kräftanLD"]){
            $horoscope = "<h2>Kräftan</h2>" . '<img src="images/kräftan.png" class="signImage">';
        }
        if($month == $allHoroscopes["lejonetFM"] && $day >= $allHoroscopes["lejonetFD"] 
        || $month == $allHoroscopes["lejonetLM"] && $day <= $allHoroscopes["lejonetLD"]){
            $horoscope = "<h2>Lejon</h2>" . '<img src="images/lejonet.png" class="signImage">';
        }
        if($month == $allHoroscopes["jungfrunFM"] && $day >= $allHoroscopes["jungfrunFD"] 
        || $month == $allHoroscopes["jungfrunLM"] && $day <= $allHoroscopes["jungfrunLD"]){
            $horoscope = "<h2>Jungfru</h2>" . '<img src="images/jungfrun.png" class="signImage">';
        }
        if($month == $allHoroscopes["vågenFM"] && $day >= $allHoroscopes["vågenFD"] 
        || $month == $allHoroscopes["vågenLM"] && $day <= $allHoroscopes["vågenLD"]){
            $horoscope = "<h2>Våg</h2>" . '<img src="images/vågen.png" class="signImage">';
        }
        if($month == $allHoroscopes["skorpionenFM"] && $day >= $allHoroscopes["skorpionenFD"] 
        || $month == $allHoroscopes["skorpionenLM"] && $day <= $allHoroscopes["skorpionenLD"]){
            $horoscope = "<h2>Skorpion</h2>" . '<img src="images/skorpionen.png" class="signImage">';
        }
        if($month == $allHoroscopes["skyttenFM"] && $day >= $allHoroscopes["skyttenFD"] 
        || $month == $allHoroscopes["skyttenLM"] && $day <= $allHoroscopes["skyttenLD"]){
            $horoscope = "<h2>Skytt</h2>" . '<img src="images/skytten.png" class="signImage">';
        }
        if($month == $allHoroscopes["stenbockenFM"] && $day >= $allHoroscopes["stenbockenFD"] 
        || $month == $allHoroscopes["stenbockenLM"] && $day <= $allHoroscopes["stenbockenLD"]){
            $horoscope = "<h2>Stenbock</h2>" . '<img src="images/stenbocken.png" class="signImage">';
        }if($month < 2 && $day <  2){
            $horoscope = "<h2>Testa igen!</h2>";
        }
        
        if(isset($horoscope)){
            return $horoscope;
        }
    }
?>