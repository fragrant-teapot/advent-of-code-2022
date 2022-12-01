<?php

declare(strict_types=1);

use App\Day1;
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
    ],
]);
$climate->arguments->parse();

if ($climate->arguments->defined('help')) {
    $climate->usage();
    exit;
}

$day = match ($climate->arguments->get('day')) {
    0 => '', // todo Add all days runner and execution time benchmark
    1 => new Day1(file_get_contents(__DIR__ . '/input/day1/input')),
    2 => '', // todo
    3 => '', // todo
    4 => '', //todo
    5 => '', //todo
    6 => '', //todo
    7 => '', //todo
    8 => '', //todo
    9 => '', //todo
    10 => '', //todo
    11 => '', //todo
    12 => '', //todo
    13 => '', //todo
    14 => '', //todo
    15 => '', //todo
    16 => '', //todo
    17 => '', //todo
    18 => '', //todo
    19 => '', //todo
    20 => '', //todo
    21 => '', //todo
    22 => '', //todo
    23 => '', //todo
    24 => '', //todo
    25 => '', //todo
};

$climate->out('Part one result: ' . $day->partOne());
$climate->out('Part two result: ' . $day->partTwo());

