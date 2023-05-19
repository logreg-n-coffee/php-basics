<?php

class TeamException extends Exception
{
    public static function fromTooManyMembers()
    {
        return new static('You cannot add more than three members');
    }
}

$teamMember = 3;
$teamMember++;
if ($teamMember > 3) {
    throw TeamException::fromTooManyMembers();
}