<?php

declare(strict_types=1);

namespace Tests;

use App\Day1;
use PHPUnit\Framework\TestCase;

class Day1Test extends TestCase
{
    private const INPUT = <<<EOD
1000
2000
3000

4000

5000
6000

7000
8000
9000

10000
EOD;

    private Day1 $day1;

    protected function setUp(): void
    {
        parent::setUp();
        $this->day1 = new Day1(self::INPUT);
    }

    public function testPartOne()
    {
        $partOne = $this->day1->partOne();
        $this->assertEquals(24000, $partOne);
    }

    public function testPartTwo()
    {
        $partTwo = $this->day1->partTwo();
        $this->assertEquals(45000, $partTwo);
    }
}
