<?php
/**
 * Tests for DawnAI
 */

use PHPUnit\Framework\TestCase;
use Dawnai\Dawnai;

class DawnaiTest extends TestCase {
    private Dawnai $instance;

    protected function setUp(): void {
        $this->instance = new Dawnai(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dawnai::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
