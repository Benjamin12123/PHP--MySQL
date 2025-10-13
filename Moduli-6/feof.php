<?php

    $file=fopen("ds.txt","r");

    while (!feof($file)){
        echo fgets($file). "<br>";

    }

    fclose( $file );    
?>