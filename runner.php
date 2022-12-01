<?php

declare(strict_types=1);

$totalTimeStart = hrtime(true);

use App\{Day1,
    Day10,
    Day11,
    Day12,
    Day13,
    Day14,
    Day15,
    Day16,
    Day17,
    Day18,
    Day19,
    Day2,
    Day20,
    Day21,
    Day22,
    Day23,
    Day24,
    Day25,
    Day3,
    Day4,
    Day5,
    Day6,
    Day7,
    Day8,
    Day9
};
use League\CLImate\CLImate;

include_once __DIR__ . '/vendor/autoload.php';

$climate = new CLImate();

$climate->description('Advent of Code 2022');
$climate->arguments->add([
    'help' => [
        'longPrefix' => 'help',
        'description' => 'Prints a usage statement',
        'noValue' => true,
    ],
    'day' => [
        'description' => 'Which day to run',
        'required' => true,
        'castTo' => 'int',
        'defaultValue' => 0
    ],
]);
$climate->arguments->parse();

if ($climate->arguments->defined('help')) {
    $climate->usage();
    exit;
}

$timeStart = hrtime(true);

$day = match ($climate->arguments->get('day')) {
    0 => '', // todo Add all days runner
    1 => new Day1(file_get_contents(__DIR__ . '/input/day1/input')),
    2 => new Day2(),
    3 => new Day3(),
    4 => new Day4(),
    5 => new Day5(),
    6 => new Day6(),
    7 => new Day7(),
    8 => new Day8(),
    9 => new Day9(),
    10 => new Day10(),
    11 => new Day11(),
    12 => new Day12(),
    13 => new Day13(),
    14 => new Day14(),
    15 => new Day15(),
    16 => new Day16(),
    17 => new Day17(),
    18 => new Day18(),
    19 => new Day19(),
    20 => new Day20(),
    21 => new Day21(),
    22 => new Day22(),
    23 => new Day23(),
    24 => new Day24(),
    25 => new Day25(),
    default => throw new Exception('Wrong parameter value')
};

$timeEnd = hrtime(true);
$executionTime = ($timeEnd - $timeStart) / 1e+6;

$climate->out('Part one result: ' . $day->partOne());
$climate->out('Part two result: ' . $day->partTwo());

$climate->out(
    sprintf(
        'Computation time: %f ms',
        $executionTime
    )
);
$climate->out(
    sprintf(
        'Total execution time: %f ms',
        (hrtime(true) - $totalTimeStart) / 1e+6
    )
);