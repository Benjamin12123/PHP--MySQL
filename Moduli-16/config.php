<?php
session_start();


$users="root";
$pass="";
$server="localhost";
$dbname="mms";


try {
    
    $conn =new PDO("mysql:host=$server;dbname=$dbname",$users,$pass);


} catch (PDOException $e) {
    echo "error: " . $e->getMessage();
}
 ?>