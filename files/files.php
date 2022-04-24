<?php
// === WRITING ===
// open file
// use the write 'w' option to erase the previous file 
// and write on top of it
$fileW = fopen("text.txt", "w");

$text = "foo\nbar\n";
fwrite($fileW, $text);

// closing file
fclose($fileW);

// === APPENDING ===
// use the append 'a' option to write on the end of the file
$fileA = fopen("text.txt", "a");

$text = "baz";
fwrite($fileA, $text);

// closing file
fclose($fileA);

// === READING ===
// most simple way to read a file
// read line by line
echo readfile("text.txt") . PHP_EOL;

// opening a file
// the 'r' option open the file in read state
$fileR = fopen("text.txt", "r");

// feof function check for the
// End of the file 
while(!feof($fileR)){ 
	// reading file line by line
	// after each fget the file pointer move to the next line
	echo fgets($fileR);
} 

// closing file
fclose($fileR);