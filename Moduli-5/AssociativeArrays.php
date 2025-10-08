<?php 
    $grade = array(
        "Math" => 3,
        "History" => 5,
        "Geography" => 2,
        $Art = 3
    );

    echo "Math grade is " . $grade["Math"] ; echo "<br>";
    echo "Art grade is " . $Art; echo "<br>";


    foreach($grade as $subject => $grade){
        echo "Subject: ". "$subject ,". "Grade:" . "$grade";
        echo "<br>";
    }
?>