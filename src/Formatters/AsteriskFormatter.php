<?php

namespace Apara\PhpArchitectureLearning\Formatters;

use Override;

class AsteriskFormatter implements FormatterInterface
{
    #[Override]
    public function format(string $text): string
    {
        $upperCaseString = mb_strtoupper($text);
        $asteriskCase = "***{$upperCaseString}***";
        return $asteriskCase;
    }
}
