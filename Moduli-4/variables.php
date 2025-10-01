<?php 

// Local and global variables. If they are inside a function they are local and else they are global. If you put a variable outside a function 
// and try to use it inside a function it won't work, only if it's inside a function
$x = 5;
 function localVariable(){
    $y =10;
    echo $y;
 }

 localVariable();
  echo "<br> $x";

  "<br>";   

  $a = 5;
  $b = 7;

  function sum(){
   global $a, $b;
   $b = $b + $a;
  }

  echo "<br>";

  sum();
  echo $b;

  
?>