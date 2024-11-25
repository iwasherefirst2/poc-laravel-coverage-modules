<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ModuleExampleTest extends TestCase
{
    public function test_add(): void
    {
        $example = new \Modules\Example();
        $result = $example->add(1,2);
        $this->assertEquals(3, $result);
    }
}
