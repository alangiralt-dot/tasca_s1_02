<?php
declare(strict_types=1);
$scores = [9132, 6453, 8934];
function isValid(int $score): bool {
		if ($score < 0 || $score > 9999) return false;
    return true;
}  
function calculateSum(array $scores): int {
	$sum = 0;
	foreach ($scores as $s) {
    if (!isValid($s)) throw new InvalidArgumentException("$s is not valid");
		$sum += $s;
	}
  return $sum;
}  
function calculateArithmeticMean(array $scores): float {
	if (count($scores) === 0) throw new InvalidArgumentException('$scores is empty');
	return calculateSum($scores) / (float) count($scores);
}
function rankPlayer(array $scores): string {
	$arithmeticMean = calculateArithmeticMean($scores);
	if ($arithmeticMean < 4000) {
		return "Beginner";
	} else if ($arithmeticMean < 8000) {
		return "Intermediate";
	} else {
		return "Professional";
	}
}
echo calculateSum($scores) . PHP_EOL;
echo calculateArithmeticMean($scores) . PHP_EOL;
echo rankPlayer($scores) . PHP_EOL;
