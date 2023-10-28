<?php
declare(strict_types=1);

namespace App\Chapter3\listing39;

use PHPUnit\Framework\TestCase;

class ConfReaderTest extends TestCase
{
    public function testMergeTwoArrays(): void
    {
        // Arrange
        $confReader = new ConfReader();
        $data = ['price' => 200, 'quantity' => 2];

        // Act
        $result = $confReader->getValues($data);

        // Assert
        $this->assertCount(4, $result);
        $this->assertEquals('product 1', $result['title']);
        $this->assertEquals('content', $result['content']);
        $this->assertEquals(200, $result['price']);
        $this->assertEquals(2, $result['quantity']);
    }

    public function testMergeArrayWithNULL(): void
    {
        // Arrange
        $confReader = new ConfReader();
        $data = null;

        // Act
        $result = $confReader->getValues($data);

        // Assert
        $this->assertCount(2, $result);
        $this->assertEquals('product 1', $result['title']);
        $this->assertEquals('content', $result['content']);
    }

}
