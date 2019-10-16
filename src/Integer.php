<?php
declare(strict_types=1);

namespace Braddle;

class Integer
{
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function greaterThan(Integer $integer)
    {
        return $this->value > $integer->value;
    }
}