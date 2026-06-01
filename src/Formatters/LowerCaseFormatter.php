<?php

namespace Apara\PhpArchitectureLearning\Formatters;

use Override;

class LowerCaseFormatter implements FormatterInterface
{
    #[Override]
    public function format(string $text): string
    {
        $lowerCaseString = mb_strtolower($text);
        return $lowerCaseString;
    }
}
