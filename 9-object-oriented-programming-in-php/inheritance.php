<?php

class Animal
{
    protected $genus;
    protected $species;
}

class WarmBloodedAnimal extends Animal
{
    public function minTemp()
    {
        return "40";
    }
}

class Mammal extends WarmBloodedAnimal
{
    public function __construct($genus, $species)
    {
        $this->genus = $genus;
        $this->species = $species;
    }
}

$human = new Mammal('Homo', 'sapiens');
echo $human->minTemp(); // outputs 40