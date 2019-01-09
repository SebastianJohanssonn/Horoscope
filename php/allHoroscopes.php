<?php
    /*Function that stores all of the signs in an array as key => value pairs and sends 
    the correct one for that date.*/
    function myHoroscope($month, $day){
        //FM = First month. SM = Last month, FD = First day. LD = Last day.
        $allHoroscopes = array(
            "vattumannenFM" => 01,  "vattumannenSM" => 02,  "vattumannenFD" => 21,  "vattumannenLD" => 18,
            "fiskarnaFM"    => 02,  "fiskarnaSM"    => 03,  "fiskarnaFD"    => 19,  "fiskarnaLD"    => 20,
            "vädurenFM"     => 03,  "vädurenSM"     => 04,  "vädurenFD"     => 21,  "vädurenLD"     => 20,
            "oxenFM"        => 04,  "oxenSM"        => 05,  "oxenFD"        => 21,  "oxenLD"        => 21,
            "tvillingFM"    => 05,  "tvillingSM"    => 06,  "tvillingFD"    => 22,  "tvillingLD"    => 21,
            "kräftanFM"     => 06,  "kräftanSM"     => 07,  "kräftanFD"     => 22,  "kräftanLD"     => 22,
            "lejonetFM"     => 07,  "lejonetSM"     => 08,  "lejonetFD"     => 23,  "lejonetLD"     => 23,
            "jungfrunFM"    => 08,  "jungfrunSM"    => 09,  "jungfrunFD"    => 24,  "jungfrunLD"    => 22,
            "vågenFM"       => 09,  "vågenSM"       => 10,  "vågenFD"       => 23,  "vågenLD"       => 23,
            "skorpionenFM"  => 10,  "skorpionenSM"  => 11,  "skorpionenFD"  => 24,  "skorpionenLD"  => 22,
            "skyttenFM"     => 11,  "skyttenSM"     => 12,  "skyttenFD"     => 23,  "skyttenLD"     => 21,
            "stenbockenFM"  => 12,  "stenbockenSM"  => 01,  "stenbockenFD"  => 22,  "stenbockenLD"  => 20,
            
        );
    }
?>