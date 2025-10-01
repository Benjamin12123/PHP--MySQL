<?php 

        $sports = ["Football", "Voleyball", "Basketball"];
    echo $sports[0];
    echo "<br>";
    echo end($sports);
    echo "<br>";
    echo count($sports);
    echo "<br>";


        $sportet =array("Football", "Voleyball", "Basketball");
    for ($i = 0; $i < 3; $i++){
        echo $sportet[$i],"\n";
    }

    echo "<br>";

        $sporte =array("Football", "Voleyball", "Basketball");
    array_push($sporte, "Golf");
    var_dump($sporte);
    echo "<br>";

        $sport =array("Football", "Voleyball", "Basketball","Golf");
    array_pop($sport);
    var_dump($sport);
    echo "<br>";

    
        $sport =array("Football", "Voleyball", "Basketball","Golf");
    array_unshift($sport, "Tennis");
    var_dump($sport);
    echo "<br>";

        $sport =array("Football", "Voleyball", "Basketball","Golf");
    array_shift($sport);
    var_dump($sport);
    echo "<br>";

?>