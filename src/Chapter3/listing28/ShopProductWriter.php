<?php
declare(strict_types=1);

namespace App\Chapter3\listing28;

class ShopProductWriter
{
	public function write($shopProduct)
	{
		$str = $shopProduct->title . ': '
			. $shopProduct->getProducer()
			. ' (' . $shopProduct->price . ")\n";

		return $str;
	}
}
