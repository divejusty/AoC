<?php

namespace Divejusty\AdventOfCode\Lib;

class File extends \Chelona\Shell\Data\File
{
    public static function inputFile($fileName): string
    {
        return __DIR__ . '/../../input/' . $fileName;
    }
}
