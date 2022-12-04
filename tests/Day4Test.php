<?php

namespace Tests;

use App\Day4;
use PHPUnit\Framework\TestCase;

class Day4Test extends TestCase
{
    private const INPUT = <<<EOD
2-4,6-8
2-3,4-5
5-7,7-9
2-8,3-7
6-6,4-6
2-6,4-8
EOD;

    private Day4 $day4;

    protected function setUp(): void
    {
        parent::setUp();
        $this->day4 = new Day4(self::INPUT);
    }

    public function testPartOne()
    {
        $val = $this->day4->partOne();
        $this->assertEquals(2, $val);
    }

    public function testPartTwo()
    {
        $val = $this->day4->partTwo();
        $this->assertEquals(4, $val);
    }
}
