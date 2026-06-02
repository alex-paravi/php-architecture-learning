<?php

require_once __DIR__ . '/vendor/autoload.php';

use Apara\PhpArchitectureLearning\Formatters\LowerCaseFormatter;
use Apara\PhpArchitectureLearning\Formatters\UpperCaseFormatter;
use Apara\PhpArchitectureLearning\TextProcessor;

$upper = new UpperCaseFormatter;
$lower = new LowerCaseFormatter;
$processor = new TextProcessor($upper);

echo $processor->process('sadAsd') . PHP_EOL;

$processor->setFormatter($lower);

echo $processor->process('sadAsd');
