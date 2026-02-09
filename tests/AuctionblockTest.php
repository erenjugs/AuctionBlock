<?php
/**
 * Tests for AuctionBlock
 */

use PHPUnit\Framework\TestCase;
use Auctionblock\Auctionblock;

class AuctionblockTest extends TestCase {
    private Auctionblock $instance;

    protected function setUp(): void {
        $this->instance = new Auctionblock(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Auctionblock::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
