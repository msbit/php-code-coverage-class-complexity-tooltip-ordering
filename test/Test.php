<?php

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    function test_decreasing_coverage(): void
    {
        $this->assertSame(2, (new A())->a(2));

        $this->assertSame(1, (new B())->a(1));

        $this->assertSame(0, (new C())->a(0));
    }

    function test_increasing_coverage(): void
    {
        $this->assertSame(0, (new A())->a(0));

        $this->assertSame(1, (new B())->a(1));

        $this->assertSame(2, (new C())->a(2));
    }
}
