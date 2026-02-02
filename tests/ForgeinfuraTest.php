<?php
/**
 * Tests for ForgeInfura
 */

use PHPUnit\Framework\TestCase;
use Forgeinfura\Forgeinfura;

class ForgeinfuraTest extends TestCase {
    private Forgeinfura $instance;

    protected function setUp(): void {
        $this->instance = new Forgeinfura(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Forgeinfura::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
