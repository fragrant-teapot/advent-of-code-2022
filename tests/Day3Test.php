<?php

namespace Tests;

use App\Day3;
use PHPUnit\Framework\TestCase;

class Day3Test extends TestCase
{
    private const INPUT = <<<EOD
vJrwpWtwJgWrhcsFMMfFFhFp
jqHRNqRjqzjGDLGLrsFMfFZSrLrFZsSL
PmmdzqPrVvPwwTWBwg
wMqvLMZHhHMvwLHjbvcjnnSBnvTQFn
ttgJtRGJQctTZtZT
CrZsJsPPZsGzwwsLwLmpwMDw
EOD;

    private Day3 $day3;

    protected function setUp(): void
    {
        parent::setUp();
        $this->day3 = new Day3(self::INPUT);
    }

    public function testPartOne()
    {
        $score = $this->day3->partOne();
        $this->assertEquals(157, $score);
    }

    public function testPartTwo()
    {
        $score = $this->day3->partTwo();
        $this->assertEquals(70, $score);
    }
}
