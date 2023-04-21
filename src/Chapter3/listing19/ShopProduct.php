<?php
declare(strict_types=1);

namespace App\Chapter3\listing19;

class ShopProduct
{
	public function __construct(
		public $title,
		public $producerFirstName = '',
		public $producerMainName = '',
		public $price = 0
	) {}
}
