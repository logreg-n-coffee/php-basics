<?php

class Age
{
    private $age;

    public function __construct($age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('That makes no sense');
        }

        $this->age = $age;
    }

    public function increment()
    {
        $this->age += 1;
    }

    public function incrementImmutable()
    {
        return new self($this->age + 1);
    }
}