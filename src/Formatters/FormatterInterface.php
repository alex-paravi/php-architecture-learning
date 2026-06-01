<?php

namespace Apara\PhpArchitectureLearning\Formatters;

interface FormatterInterface
{
    public function format(string $text): string;
}
