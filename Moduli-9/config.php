<?php 

    $host= 'localhost';
    $user= 'root';
    $psw="";
    $dbname= 'db1';

    try{
        $conn = new PDO("mySQL:host=$host; dbname=$dbname", $user , $psw);
    }
    catch(Exception $e){
        echo "Something went wrong";
    }
?>