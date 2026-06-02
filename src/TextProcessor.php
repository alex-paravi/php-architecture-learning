<?php

namespace Apara\PhpArchitectureLearning;

use Apara\PhpArchitectureLearning\Formatters\FormatterInterface;

class TextProcessor
{
    private FormatterInterface $formatter;
    public function __construct(FormatterInterface $formatter)
    {
        $this->formatter = $formatter;
    }

    public function setFormatter($formatter): void
    {
        $this->formatter = $formatter;
    }

    public function process(string $text): string
    {
        $result = $this->formatter->format($text);
        return $result;
    }
}
