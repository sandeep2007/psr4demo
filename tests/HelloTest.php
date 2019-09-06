<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use HelloWorld\Hello;

final class HelloTest extends TestCase
{

    public function testWorld()
    {
        $this->assertContainsOnly('string', [Hello::world()]);
    }
}
