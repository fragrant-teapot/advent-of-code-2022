<?php

declare(strict_types=1);

namespace App;

class Day1 implements DayInterface
{
    private readonly array $elfCalories;

    public function __construct(string $input)
    {
        $this->elfCalories = $this->parseInput($input);
    }

    private function parseInput(string $input): array
    {
        $calories = explode(PHP_EOL, $input);

        $elfs = [];
        $elf = 0;
        foreach ($calories as $calorie) {
            if ($calorie === '') {
                $elfs[] = $elf;
                $elf = 0;
            } else {
                $elf += (int)$calorie;
            }
        }
        $elfs[] = $elf;

        rsort($elfs);
        return $elfs;
    }

    public function partOne(): int
    {
        return max($this->elfCalories);
    }

    public function partTwo(): int
    {
        return $this->elfCalories[0] + $this->elfCalories[1] + $this->elfCalories[2];
    }
}