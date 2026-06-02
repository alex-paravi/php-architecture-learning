<?php

namespace Apara\PhpArchitectureLearning\Formatters;

use Attribute;
use Override;

class UpperCaseFormatter implements FormatterInterface
{
    #[Override]
    public function format(string $text): string
    {
        $upperCaseString = mb_strtoupper($text);
        return $upperCaseString;
    }
}
