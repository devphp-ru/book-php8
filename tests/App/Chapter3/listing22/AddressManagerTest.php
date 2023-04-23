<?php
declare(strict_types=1);

namespace App\Chapter3\listing22;

use PHPUnit\Framework\TestCase;

class AddressManagerTest extends TestCase
{
	public function testGetAddress(): void
	{
		$addressManager = new AddressManager();

		ob_start();
		$addressManager->outputAddresses(false);
		$output = ob_get_contents();
		ob_end_clean();
		$this->assertEquals("209.131.36.159\n216.58.213.174\n", $output);

		ob_start();
		$addressManager->outputAddresses(true);
		$output = ob_get_contents();
		ob_end_clean();
		$this->assertMatchesRegularExpression("|209.131.36.159 \\(.*?\\)\n216.58.213.174 \\(.*?\\)\n|", $output);
	}
}
