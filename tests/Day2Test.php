<?php

namespace Tests;

use App\Day2;
use PHPUnit\Framework\TestCase;

class Day2Test extends TestCase
{
    private const INPUT = <<<EOD
A Y
B X
C Z
EOD;


    private Day2 $day2;

    protected function setUp(): void
    {
        parent::setUp();
        $this->day2 = new Day2(self::INPUT);
    }

    public function testPartOne()
    {
        $score = $this->day2->partOne();
        $this->assertEquals(15, $score);
    }

    public function testPartTwo()
    {
        $score = $this->day2->partTwo();
        $this->assertEquals(12, $score);
    }
}
