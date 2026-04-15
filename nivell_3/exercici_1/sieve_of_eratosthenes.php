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
$numbers = [];
for ($i = 2; $i <= 20; $i++) {
  array_push($numbers, $i);
}
print_r($numbers);