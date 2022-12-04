<?php

declare(strict_types=1);

namespace App;

class Day4 implements DayInterface
{
    private array $pairs;

    public function __construct(string $input)
    {
        $this->pairs = explode(PHP_EOL, $input);
    }

    public function partOne(): int
    {
        $sum = 0;

        foreach ($this->pairs as $pair) {
            $ranges = explode(',', $pair);
            $elf1 = explode('-', $ranges[0]);
            $elf2 = explode('-', $ranges[1]);

            $elf1 = range($elf1[0], $elf1[1]);
            $elf2 = range($elf2[0], $elf2[1]);
            $intersection = array_intersect($elf1, $elf2);

            if(
                count($elf1) === count($intersection)
                || count($elf2) === count($intersection)
            ) {
                $sum++;
            }
        }

        return $sum;
    }

    public function partTwo(): int
    {
        $sum = 0;

        foreach ($this->pairs as $pair) {
            $ranges = explode(',', $pair);
            $elf1 = explode('-', $ranges[0]);
            $elf2 = explode('-', $ranges[1]);

            $elf1 = range($elf1[0], $elf1[1]);
            $elf2 = range($elf2[0], $elf2[1]);
            $intersection = array_intersect($elf1, $elf2);

            if(
                count($intersection) > 0
            ) {
                $sum++;
            }
        }

        return $sum;
    }
}