<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class AppExampleTest extends TestCase
{
    public function test_add(): void
    {
        $example = new \App\Example();
        $result = $example->add(1,2);
        $this->assertEquals(3, $result);
    }
}
