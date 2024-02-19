<?php

namespace University;

class ClassSchedule
{
    private $textIdentifier;

    public function __construct($textIdentifier)
    {
        $this->textIdentifier = $textIdentifier;
    }

    public function getTextIdentifier()
    {
        return $this->textIdentifier;
    }
}
