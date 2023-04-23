<?php
declare(strict_types=1);

namespace App\Chapter3\listing22;

class AddressManager
{
	private array $addresses = ['209.131.36.159', '216.58.213.174'];

	public function outputAddresses($resolve)
	{
		foreach ($this->addresses as $address) {
			echo $address;
			if ($resolve) {
				echo ' (' . gethostbyaddr($address) . ')';
			}
			echo "\n";
		}
	}
}
