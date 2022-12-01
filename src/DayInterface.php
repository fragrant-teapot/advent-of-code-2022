<?php

declare(strict_types=1);

namespace App;

interface DayInterface
{
    public function partOne(): int;

    public function partTwo(): int;
}