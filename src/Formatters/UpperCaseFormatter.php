<?php

namespace Apara\PhpArchitectureLearning\Formatters;

//use Apara\PhpArchitectureLearning\Formatters\FormatterInterface;

class UpperCaseFormatter implements FormatterInterface
{
    public function format(string $text): string
    {
        $upperCaseString = mb_strtoupper($text);
        return $upperCaseString;
    }
}
