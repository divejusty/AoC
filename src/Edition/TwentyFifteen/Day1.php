<?php

namespace Divejusty\AdventOfCode\Edition\TwentyFifteen;

use Chelona\Shell\Console\IO;
use Chelona\Shell\Routing\Actionable;
use Divejusty\AdventOfCode\Lib\File;

class Day1 implements Actionable
{
    public function call(?array $args = []): mixed
    {
        $input = File::inputFile('2015/day1.txt');
        $characterCounts = File::characterCounts($input);
        foreach ($characterCounts as $character => $count) {
            IO::write("$character: $count");
        }
        $result = $characterCounts['('] - $characterCounts[')'];

        IO::write("floor $result");

        return true;
    }
}
