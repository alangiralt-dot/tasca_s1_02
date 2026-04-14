<?php
$message = 'Hello, World!';
echo $message . PHP_EOL;
echo strtoupper($message) . PHP_EOL;
echo 'The length of the string is ' . mb_strlen($message) . PHP_EOL;
echo strrev($message) . PHP_EOL;
$message2 = 'Aquest és el curs de PHP';
echo $message . ' ' . $message2 . PHP_EOL;