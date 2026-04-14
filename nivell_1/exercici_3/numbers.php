<?php
//To run this code you must use PHP 8.0 or later
declare(strict_types=1);
// part A
$x = 27;
$y = 12;
echo '$x is ' . $x . PHP_EOL;
echo '$y is ' . $y . PHP_EOL;
echo '$x + $y is ' . $x + $y . PHP_EOL;
echo '$x - $y is ' . $x - $y . PHP_EOL;
echo '$x * $y is ' . $x * $y . PHP_EOL;
echo '$x % $y is ' . $x % $y . PHP_EOL;
echo '---------------------' . PHP_EOL;
$n = 18.27;
$m = 4.35;
echo '$n is ' . $n . PHP_EOL;
echo '$m is ' . $m . PHP_EOL;
echo '$n + $m is ' . $n + $m . PHP_EOL;
echo '$n - $m is ' . $n - $m . PHP_EOL;
echo '$n * $m is ' . $n * $m . PHP_EOL;
echo 'fmod($n, $m) is ' . fmod($n, $m) . PHP_EOL;
echo '---------------------' . PHP_EOL;
echo 'The double of $x is ' . 2 * $x . PHP_EOL;
echo 'The double of $y is ' . 2 * $y . PHP_EOL;
echo 'The double of $n is ' . 2 * $n . PHP_EOL;
echo 'The double of $m is ' . 2 * $m . PHP_EOL;
echo '$x + $y + $n + $m is ' . $x + $y + $n + $m . PHP_EOL;
echo '$x * $y * $n * $m is ' . $x * $y * $n * $m . PHP_EOL;
// part B
function calculate(float $num1, float $num2, string $operator): ?float {
  if ($num2 === 0.0 && $operator === '/') return null;
  return match($operator) {
    '+' => $num1 + $num2,
    '-' => $num1 - $num2,
    '*' => $num1 * $num2,
    '/' => $num1 / $num2,
    default => null
  };
}
echo '---------------------' . PHP_EOL;
var_dump(calculate(13.47, 1.26, '+'));