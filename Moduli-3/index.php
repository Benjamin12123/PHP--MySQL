<?php
    $num= 5;

    if($num < 0 ){
        echo "The number $num is smaller than 0";
    } else{
        echo "The number $num is bigger or equal to 0";
    };

    echo "<br>";
    $age=21;

    if(($age> 19)&&($age<30)){
        echo "You are in your twenties";
    }

       echo "<br>";

    if($age <18){
        echo "You are still a teenager";
    }
    else{
        echo "You are grown";
    }

    echo "<br>";

    if($num > 0){
        echo "The number is bigger than 0";
    } else if($num == 0){
        echo "The number is 0";
    }else {
        echo "The number is smaller than 0";
    }

    $a =30;
    $b= 20;
   echo "<br>";
    if($a== $b){
        echo" The variables are the same";
    }else if($a> $b){
    echo" A is greater than B";
    }
    else{echo "False";}

?>