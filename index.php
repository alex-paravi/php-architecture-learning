<?php

require_once __DIR__ . '/vendor/autoload.php';

use Apara\PhpArchitectureLearning\Formatters\LowerCaseFormatter;
use Apara\PhpArchitectureLearning\Formatters\UpperCaseFormatter;
use Apara\PhpArchitectureLearning\TextProcessor;

$strategy1 = new UpperCaseFormatter;
$strategy2 = new LowerCaseFormatter;
$process = new TextProcessor($strategy1);

$text = 'helLo world';

$result1 = $process->process($text);
$process = new TextProcessor($strategy2);
$result2 = $process->process($text);

var_dump($result2);
