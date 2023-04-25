<?php
declare(strict_types=1);

namespace App\Chapter3\listing33;

class ShopProduct
{
	public function __construct(
		public string $title,
		public string $producerFirstName,
		public string $producerMainName,
		public float $price,
	) {}

	public function getProducer()
	{
		return $this->producerFirstName . ' ' . $this->producerMainName;
	}
}
