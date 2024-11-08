<?php

namespace Divejusty\AdventOfCode\Lib;

use Chelona\Shell\Routing\Actionable;

abstract class DayAction implements Actionable
{
    public function call(?array $args = []): mixed
    {
        return $this->__call(...$args);
    }

    public function __call(string $name, array $arguments)
    {
        return $this->$name(...$arguments);
    }
}
