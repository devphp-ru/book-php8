<?php
declare(strict_types=1);

namespace App\Chapter3\listing33;

use PHPUnit\Framework\TestCase;

class ShopProductTest extends TestCase
{
	public function testCheckTypeDeclaration(): void
	{
		$product = new ShopProduct('Собачье сердце', 'Михаил', 'Булгаков', 5.99);

		$this->assertIsString($product->title);
		$this->assertIsString($product->producerFirstName);
		$this->assertIsString($product->producerMainName);
		$this->assertIsFloat($product->price);
		$this->assertEquals(gettype($product->price), 'double');

		$this->assertEquals('Собачье сердце', $product->title);
		$this->assertEquals('Михаил', $product->producerFirstName);
		$this->assertEquals('Булгаков', $product->producerMainName);
		$this->assertEquals(5.99, $product->price);
		$this->assertEquals('Михаил Булгаков', $product->getProducer());
	}

	public function testInvalidParameters(): void
	{
		$this->expectException(\TypeError::class);
		$this->expectExceptionMessage('Переданы неверные параметры.');

		try {
			$product = new ShopProduct('Собачье сердце', 'Михаил', 'Булгаков', []);
		} catch (\TypeError $e) {
			throw new \TypeError('Переданы неверные параметры.');
		}
	}
}
