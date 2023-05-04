<?php
declare(strict_types=1);

namespace App\Chapter3\listing42;

use PHPUnit\Framework\TestCase;

class StorageTest extends TestCase
{
	public function testCheckTypeUnionInMethod(): void
	{
		$storage = new Storage();
		$storage->add('key', true);

		$this->assertTrue($storage->add('key', true));

		$storage->add('key', 'value');

		$this->assertIsString($storage->add('key', 'value'));
		$this->assertSame('value', $storage->add('key', 'value'));

		$storage->add('key', []);
		$fileerror = __DIR__ . '/../../../../src/Chapter3/listing42/log_error.txt';
		$content = file($fileerror);
		$this->assertEquals("Требуется тип string или bool, а не array\r\n", $content[0]);
	}
}
