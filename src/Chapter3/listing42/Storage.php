<?php
declare(strict_types=1);

namespace App\Chapter3\listing42;

class Storage
{
	public function add(string $key, $value)
	{
		if (!is_bool($value) && !is_string($value)) {
			$fileerror = __DIR__ . '/log_error.txt';
			error_log('Требуется тип string или bool, а не ' . gettype($value) . "\r\n", 3, $fileerror);

			return false;
		}

		return $value;
	}
}
