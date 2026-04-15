<?php
declare(strict_types=1);
function eratosthenesSieve($limit){
  $s = floor(sqrt($limit));
  $integers = [];
  for ($i = 2; $i <= $limit; $i++) {
    array_push($integers, [$i, true]);
  }
  for ($i = 0; $i < count($integers); $i++) {
    if ($integers[$i][0] > $s) break;
    for ($j = $i + 1; $j < count($integers); $j++){
      if ($integers[$j][1] && $integers[$j][0] % $integers[$i][0] == 0) {
        $integers[$j][1] = false;
      }
    }
  }
  $primeNumbers = [];
  for ($i = 0; $i < count($integers); $i++) {
    if ($integers[$i][1]) {
      array_push($primeNumbers, $integers[$i][0]);
    }
  }
  return $primeNumbers;
}
print_r(eratosthenesSieve(100));