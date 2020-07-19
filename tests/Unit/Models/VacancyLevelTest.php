<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\VacancyLevel;

class VacancyLevelTest extends TestCase
{
    /**
     * @param int $remainingCount
     * @param string $expectedMark
     * @dataProvider dataMark
     */
    public function testMark(int $remainingCount, string $expectedMark)
    {
        $level = new VacancyLevel($remainingCount);
        $this->assertSame($expectedMark, $level->mark());
    }
    
    public function dataMark()
    {
        return [
            '空きなし' => [
                'remainingCount' => 0,
                'expectedMark' => 'x',
            ],
            '残りわずか' => [
                'remainingCount' => 4,
                'expectedMark' => '△',
            ],
            '空き十分' => [
                'remainingCount' => 5,
                'expectedMark' => '◎',
            ],
        ];
    }

    // public function testMark()
    // {
    //     $level = new VacancyLevel(0);
    //     $this->assertSame('x', $level->mark());

    //     $level = new VacancyLevel(4);
    //     $this->assertSame('△', $level->mark());

    //     $level = new VacancyLevel(5);
    //     $this->assertSame('◎', $level->mark());
    // }
    // // /**
    // //  * A basic unit test example.
    // //  *
    // //  * @return void
    // //  */
    // // public function testExample()
    // // {
    // //     $this->assertTrue(true);
    // // }
}
