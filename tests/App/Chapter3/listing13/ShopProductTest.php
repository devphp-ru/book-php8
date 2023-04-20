<?php
declare(strict_types=1);

namespace App\Chapter3\listing13;

use PHPUnit\Framework\TestCase;

class ShopProductTest extends TestCase
{
	public function testCanCreateShopProduct(): void
	{
		$shopProduct = new ShopProduct();
		$shopProduct->title = 'Собачье сердце';
		$shopProduct->producerMainName = 'Булгаков';
		$shopProduct->producerFirstName = 'Михаил';
		$shopProduct->price = 5.99;

		$this->assertEquals('Собачье сердце', $shopProduct->title);
		$this->assertEquals('Булгаков', $shopProduct->producerMainName);
		$this->assertEquals('Михаил', $shopProduct->producerFirstName);
		$this->assertEquals(5.99, $shopProduct->price);
		$this->assertEquals('Михаил Булгаков', $shopProduct->getProducer());
	}
}
