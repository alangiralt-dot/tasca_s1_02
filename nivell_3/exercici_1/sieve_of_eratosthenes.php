<?php
declare(strict_types=1);
function isPrime(int $integer): bool {
  $divisor = 2;
  for ($divisor = 2; $divisor <= $integer; $divisor++) {
    if ($integer % $divisor === 0) {
      if ($integer == $divisor) {
        return true;
      } else {
        return false;
      }
    }
  }
  return false;
}
echo isPrime(7) . PHP_EOL;
$numbers = [];
for ($i = 2; $i <= 20; $i++) {
  array_push($numbers, $i);
}
print_r($numbers);
echo 'bye bye';
function eratosthenesSieve($limit){
  $s = ceil(sqrt($limit));
  $integers = [];
  for ($i = 2; $i <= $limit; $i++) {
    array_push($integers, [$i, true]);
  }
  for ($i = 0; $i <= count($integers); $i++) {
    if ($integers[$i][0] == $s) break;
  }
echo 'the end';
}
eratosthenesSieve(16);
