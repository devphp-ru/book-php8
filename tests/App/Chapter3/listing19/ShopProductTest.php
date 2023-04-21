<?php
declare(strict_types=1);

namespace App\Chapter3\listing19;

use PHPUnit\Framework\TestCase;

class ShopProductTest extends TestCase
{
	public function testDefaultClassArguments(): void
	{
		$product = new ShopProduct('Собачье сердце');

		$this->assertEquals('Собачье сердце', $product->title);
		$this->assertEquals('', $product->producerFirstName);
		$this->assertEquals('', $product->producerMainName);
		$this->assertEmpty($product->producerFirstName);
		$this->assertEmpty($product->producerMainName);
		$this->assertEquals(0, $product->price);
	}
}
