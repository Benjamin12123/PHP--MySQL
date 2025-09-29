<?php 

    function Hey(){
        echo "Hello There";
    }

    Hey();

    echo "<br>";

    function sum(){
        $value = 120 + 30;
        echo($value);
    }

    sum();
    echo "<br>";

    function maximum($x, $y){
        if($x > $y){
            return $x;
        }else {
            return $y;
        }
    }
    $a = 50;
    $b = 75;
    

    $show = maximum($a,$b);
    echo "The maximum value between $a and $b is $show";

?>