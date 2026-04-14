<?php
declare(strict_types=1);
function getDivision(float $percentage): string {
  if ($percentage < 0) throw new InvalidArgumentException('$percentage is not positive');
  if ($percentage > 100) throw new InvalidArgumentException('$percentage is larger than 100');
  if ($percentage < 33) {
    return "Fail";
  } else if ($percentage < 45) {
    return "Third Division";
  } else if ($percentage < 60) {
    return "Second Division";
  } else {
    return "First Division";
  }
}
echo getDivision(44);