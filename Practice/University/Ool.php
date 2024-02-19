<?php

namespace University;

class School
{
    private $name;
    private $location;

    public function __construct($name, $location)
    {
        $this->name = $name;
        $this->location = $location;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLocation()
    {
        return $this->location;
    }
}
