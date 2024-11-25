<?php

namespace Tests\Unit;

use App\Ur;
use Modules\Example;
use PHPUnit\Framework\TestCase;

class ModuleExampleTest extends TestCase
{
    public function test_add(): void
    {
        $example = new \Module\Example();
        $result = $example->add(1,2);
        $this->assertEquals(3, $result);
    }
}
