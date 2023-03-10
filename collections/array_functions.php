<?php

// ARRAYS
// create an array
$arr = [];

// push values into an array
array_push($arr, 'value','value2', 'value3');
// push a single value into an array
$arr[] = 'value4';


var_dump($arr);

// merge 2 arrays
$arr2 = ['value5', 'value6'];

$arrays = array_merge($arr, $arr2);

var_dump($arrays);

//get and remove the first element of an array
$firstEl = array_shift($arr);

var_dump($firstEl);
var_dump($arr);

// get and remove the last element of an array
$lastEl = array_pop($arr);
var_dump($lastEl);

// adding a item in the end of the array
array_unshift($arr, 'value 7');