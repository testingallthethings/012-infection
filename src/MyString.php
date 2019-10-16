<?php
declare(strict_types=1);

namespace Braddle;

class MyString
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function toUpperCase() : string
    {
        return strtolower($this->value);
    }
}