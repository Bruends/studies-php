<?php

// most simple way to read a file
echo readfile("text.txt") . PHP_EOL;

// -> using fopen
// opening a file
$file = fopen("text.txt", "r");

// feof function check for the
// End of the file 
while(!feof($file)){ 
	// reading file line by line
	// after each fget the file pointer move to the next line
	echo fgets($file);
} 
// closing file
fclose($file);
