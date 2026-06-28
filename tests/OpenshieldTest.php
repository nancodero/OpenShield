<?php
/**
 * Tests for OpenShield
 */

use PHPUnit\Framework\TestCase;
use Openshield\Openshield;

class OpenshieldTest extends TestCase {
    private Openshield $instance;

    protected function setUp(): void {
        $this->instance = new Openshield(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Openshield::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
