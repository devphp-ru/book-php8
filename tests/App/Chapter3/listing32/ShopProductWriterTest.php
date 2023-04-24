<?php
declare(strict_types=1);

namespace App\Chapter3\listing32;

use PHPUnit\Framework\TestCase;

class ShopProductWriterTest extends TestCase
{
	public function testGetProductInformation(): void
	{
		$product = new ShopProduct('Собачье сердце', 'Михаил', 'Булгаков', 5.99);

		$this->assertEquals('Собачье сердце', $product->title);
		$this->assertEquals('Михаил', $product->producerFirstName);
		$this->assertEquals('Булгаков', $product->producerMainName);
		$this->assertEquals(5.99, $product->price);
		$this->assertEquals('Михаил Булгаков', $product->getProducer());

		$result = (new ShopProductWriter())->write($product);
		$expected = "Собачье сердце: Михаил Булгаков (5.99)\n";
		$this->assertEquals($expected, $result);
	}

	public function testCanPassAnObjectOfAnotherType(): void
	{
		$this->expectException(\TypeError::class);
		$this->expectExceptionMessage('Передан неверный тип объекта.');

		try {
			$product = new Wrong();
			$result = (new ShopProductWriter())->write($product);
		} catch (\TypeError $e) {
			throw new \TypeError('Передан неверный тип объекта.');
		}
	}
}
