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




    $mosha=15;
    switch($mosha){
        case($mosha >=0 && $mosha<=18):
        echo "You are a minor (0-18)<br>";
        break;

        case($mosha >=18 && $mosha<=25):
        echo "Youn are a young adult";
        break;

        case($mosha >25):
        echo "You are an adult <br>";
        break;

        default:
        echo "Invalid Age";
        break;


    }

    $day = "Monday";

    switch($day){
        case 'Monday':
            echo "It is Monday <br>";
            break;  
             case 'Tuesday':
            echo "It is Tuesday <br>";
            break;
             case 'Wednesday':
            echo "It is Wednesday <br>";
            break;
             case 'Thursday':
            echo "It is Thursday <br>";
            break;
             case 'Friday':
            echo "It is Friday <br>";
            break;
             case 'Saturday':
            echo "It is Saturday <br>";
            break;      
             case 'Sunday':
            echo "It is Sunday <br>";
            break;
            default:
            echo "Inavlid Day <br>";
            break;
    }

?>