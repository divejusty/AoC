<?php

use Divejusty\AdventOfCode\Lib\App;
use Divejusty\AdventOfCode\Edition\TwentyFifteen;

$app = new App();

$app->register('2015/1', new TwentyFifteen\Day1);

$app->run();
