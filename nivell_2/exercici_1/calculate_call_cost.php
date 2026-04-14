<?php
declare(strict_types=1);
function calculateCallCost(float $duration): float {
  if ($duration <= 0.0) throw new InvalidArgumentException('$duration is less than or equal to 0');
  return $duration > 3 ? 0.1 + (ceil($duration) - 3) * 0.05 : 0.1;
}
echo number_format(calculateCallCost(5.24), 2) . ' €';