<?php
declare(strict_types=1);
function printSequence(int $step, int $limit=10): void {
  if ($step <= 0) throw new InvalidArgumentException('$step is not positive');
  if ($limit <= 0) throw new InvalidArgumentException('$limit is not positive');
  if ($step > $limit) throw new InvalidArgumentException('$step is larger than $limit');
  if ($step === $limit) {
    echo $limit;
    return;
  }
  if ($limit % $step !== 0) throw new InvalidArgumentException('$limit is not a multiple of $step');
  $sequence = '';
  for ($i = $step ; $i < $limit; $i += $step) {
    $sequence .= $i . ', ';
  }
  echo $sequence . $limit;
}
printSequence(12, 36);