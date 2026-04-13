<?php
$myInteger = 123;
$myDouble = 123.4;
$myString = 'abc';
$myBoolean = true;
echo '$myInteger is ' . $myInteger . ' and its data type is ' . gettype($myInteger) . PHP_EOL;
echo '$myDouble is ' . $myDouble . ' and its data type is ' . gettype($myDouble) . PHP_EOL;
echo '$myString is ' . $myString . ' and its data type is ' . gettype($myString) . PHP_EOL;
echo '$myBoolean is ' . $myBoolean . ' and its data type is ' . gettype($myBoolean) . PHP_EOL;
const FIRST_NAME = 'Alan';
echo 'FIRST_NAME is ' . FIRST_NAME . ' and its data type is ' . gettype(FIRST_NAME) . PHP_EOL;