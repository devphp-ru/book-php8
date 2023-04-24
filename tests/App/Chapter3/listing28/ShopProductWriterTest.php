<?php
declare(strict_types=1);

namespace App\Chapter3\listing28;

use PHPUnit\Framework\TestCase;

class ShopProductWriterTest extends TestCase
{
	public function testGetProductInformation(): void
	{
		$product = new ShopProduct('Собачье сердце', 'Михаил', 'Булгаков', 5.99);

		$this->assertTrue($product instanceof ShopProduct);
		$this->assertEquals('Собачье сердце', $product->title);
		$this->assertEquals('Михаил', $product->producerFirstName);
		$this->assertEquals('Булгаков', $product->producerMainName);
		$this->assertEquals(5.99, $product->price);

		$result = (new ShopProductWriter())->write($product);

		$expected = "Собачье сердце: Михаил Булгаков (5.99)\n";
		$this->assertEquals($expected, $result);
	}
}
