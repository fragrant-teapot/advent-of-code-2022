<?php

declare(strict_types=1);

namespace App;

class Day3 implements DayInterface
{
    private const CHAR_VALUES = [
        'a' => 1,
        'b' => 2,
        'c' => 3,
        'd' => 4,
        'e' => 5,
        'f' => 6,
        'g' => 7,
        'h' => 8,
        'i' => 9,
        'j' => 10,
        'k' => 11,
        'l' => 12,
        'm' => 13,
        'n' => 14,
        'o' => 15,
        'p' => 16,
        'q' => 17,
        'r' => 18,
        's' => 19,
        't' => 20,
        'u' => 21,
        'v' => 22,
        'w' => 23,
        'x' => 24,
        'y' => 25,
        'z' => 26,
        'A' => 27,
        'B' => 28,
        'C' => 29,
        'D' => 30,
        'E' => 31,
        'F' => 32,
        'G' => 33,
        'H' => 34,
        'I' => 35,
        'J' => 36,
        'K' => 37,
        'L' => 38,
        'M' => 39,
        'N' => 40,
        'O' => 41,
        'P' => 42,
        'Q' => 43,
        'R' => 44,
        'S' => 45,
        'T' => 46,
        'U' => 47,
        'V' => 48,
        'W' => 49,
        'X' => 50,
        'Y' => 51,
        'Z' => 52,
    ];

    private array $rucksacks;

    public function __construct(string $input)
    {
        $this->rucksacks = explode(PHP_EOL, $input);
    }

    public function partOne(): int
    {
        $sum = 0;

        foreach ($this->rucksacks as $rucksack) {
            $items = str_split($rucksack);
            $count = count($items);

            $commonItems = array_unique(array_intersect(
                array_slice($items, 0, $count / 2),
                array_slice($items, $count / 2)
            ));

            foreach($commonItems as $item) {
                $sum += self::CHAR_VALUES[$item];
            }
        }

        return $sum;
    }

    public function partTwo(): int
    {
        $sum = 0;

        for ($i = 0; $i < count($this->rucksacks); $i += 3) {
            $badge = array_unique(array_intersect(
                str_split($this->rucksacks[$i]),
                str_split($this->rucksacks[$i+1]),
                str_split($this->rucksacks[$i+2])
            ));

            $sum += self::CHAR_VALUES[current($badge)];
        }

        return $sum;
    }
}