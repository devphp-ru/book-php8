<?php
declare(strict_types=1);

namespace App\Chapter3\listing32;

class ShopProductWriter
{
	public function write(ShopProduct $product)
	{
		$str = $product->title . ': '
			. $product->getProducer()
			. ' (' . $product->price . ")\n";

		return $str;
	}
}
