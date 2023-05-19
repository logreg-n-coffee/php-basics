<?php

// remove the ability to instantiate the class directly
abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    abstract public function qualifier(); // abstract method: there is a signature but no implementation
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {
        // check if user has earned this achievement
    }
}

class ReachTop50 extends AchievementType
{
    public function qualifier($user)
    {
        // check if user has earned this achievement
    }
}