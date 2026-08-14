<?php
/**
 * Tests for PeakPivot
 */

use PHPUnit\Framework\TestCase;
use Peakpivot\Peakpivot;

class PeakpivotTest extends TestCase {
    private Peakpivot $instance;

    protected function setUp(): void {
        $this->instance = new Peakpivot(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Peakpivot::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
