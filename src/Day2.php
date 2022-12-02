<?php

declare(strict_types=1);

namespace App;

class Day2 implements DayInterface
{
    private const STRATEGY_ONE_DICT = [
        'A X' => 4,
        'A Y' => 8,
        'A Z' => 3,
        'B X' => 1,
        'B Y' => 5,
        'B Z' => 9,
        'C X' => 7,
        'C Y' => 2,
        'C Z' => 6,
    ];

    private const STRATEGY_TWO_DICT = [
        'A X' => 3,
        'A Y' => 4,
        'A Z' => 8,
        'B X' => 1,
        'B Y' => 5,
        'B Z' => 9,
        'C X' => 2,
        'C Y' => 6,
        'C Z' => 7,
    ];

    private readonly array $plays;

    public function __construct(string $input)
    {
        $this->plays = explode(PHP_EOL, $input);
    }

    public function partOne(): int
    {
        $score = 0;

        foreach ($this->plays as $play) {
            $score += self::STRATEGY_ONE_DICT[$play];
        }

        return $score;
    }

    public function partTwo(): int
    {
        $score = 0;

        foreach ($this->plays as $play) {
            $score += self::STRATEGY_TWO_DICT[$play];
        }

        return $score;
    }
}