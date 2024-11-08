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
        IO::write('part 1');
        $this->part1($input);

        IO::write('part 2');
        $this->part2($input);

        return true;
    }

    private function part1(string $input): void
    {
        $characterCounts = File::characterCounts($input);
        $result = $characterCounts['('] - $characterCounts[')'];

        IO::write("floor $result");
    }

    public function part2(string $input): void
    {
        $contents = File::read($input);

        $characters = str_split($contents);

        $currentFloor = 0;

        for ($i = 1; $i <= count($characters); $i++) {
            if ($characters[$i-1] === '(') {
                $currentFloor++;
            } else {
                $currentFloor--;
            }
            if ($currentFloor < 0) {
                IO::write("entered the basement at step $i");
                break;
            }
        }
    }
}
