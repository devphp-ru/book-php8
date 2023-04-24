<?php
declare(strict_types=1);

namespace App\Chapter3\listing28;

use PHPUnit\Framework\TestCase;

class ShopProductTest extends TestCase
{
	public function testCanCreateProdut(): void
	{
		$product = new ShopProduct('Собачье сердце', 'Михаил', 'Булгаков', 5.99);

		$this->assertEquals('Собачье сердце', $product->title);
		$this->assertEquals('Михаил', $product->producerFirstName);
		$this->assertEquals('Булгаков', $product->producerMainName);
		$this->assertEquals(5.99, $product->price);
	}
}
