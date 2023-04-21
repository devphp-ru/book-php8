<?php
declare(strict_types=1);

namespace App\Chapter3\listing21;

use PHPUnit\Framework\TestCase;

class ShopProductTest extends TestCase
{
	public function testNamedClassArguments(): void
	{
		$product = new ShopProduct(price: 5.99, title: 'Собачье сердце');

		$this->assertEquals('Собачье сердце', $product->title);
		$this->assertEquals(5.99, $product->price);
		$this->assertEmpty($product->producerFirstName);
		$this->assertEmpty($product->producerMainName);
	}
}
