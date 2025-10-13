<?php
//Set file name
$saved = "ds2.txt";
// Open and read File
$show = fopen($saved,"r");
// Get file size
$size = filesize($saved);
// Save content in var
$VariableSave = fread($show, $size);

echo $VariableSave;

?>