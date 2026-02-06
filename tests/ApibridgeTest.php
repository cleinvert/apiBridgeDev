<?php
/**
 * Tests for apiBridge
 */

use PHPUnit\Framework\TestCase;
use Apibridge\Apibridge;

class ApibridgeTest extends TestCase {
    private Apibridge $instance;

    protected function setUp(): void {
        $this->instance = new Apibridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apibridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
