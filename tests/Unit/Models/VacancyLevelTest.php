<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\VacancyLevel;

class VacancyLevelTest extends TestCase
{
    public function testMark()
    {
        $level = new VacancyLevel(0);
        $this->assertSame('x', $level->mark());

        $level = new VacancyLevel(4);
        $this->assertSame('△', $level->mark());

        $level = new VacancyLevel(5);
        $this->assertSame('◎', $level->mark());
    }
    // /**
    //  * A basic unit test example.
    //  *
    //  * @return void
    //  */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }
}