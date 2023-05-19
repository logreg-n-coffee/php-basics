<?php

class Team
{
    protected $name;
    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$teamRui = Team::start('Team Rui', [
    new Member('Rui'),
    new Member('Mary'),
    new Member('John')
]);

var_dump($teamRui);