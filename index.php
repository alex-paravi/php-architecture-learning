<?php

require_once __DIR__ . '/vendor/autoload.php';

use Apara\PhpArchitectureLearning\Formatters\AsteriskFormatter;
use Apara\PhpArchitectureLearning\Formatters\LowerCaseFormatter;
use Apara\PhpArchitectureLearning\Formatters\UpperCaseFormatter;
use Apara\PhpArchitectureLearning\TextProcessor;

$upper = new UpperCaseFormatter;
$lower = new LowerCaseFormatter;
$asterisk = new AsteriskFormatter;
$processor = new TextProcessor($upper);

echo $processor->process('sadAsd') . PHP_EOL;

$processor->setFormatter($lower);

echo $processor->process('sadAsd') . PHP_EOL;


$processor->setFormatter($asterisk);

echo $processor->process('asff');
