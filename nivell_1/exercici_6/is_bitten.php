<?php
declare(strict_types=1);
function isBitten(): bool{
	return rand(0,1) === 1;
}
var_dump(isBitten());