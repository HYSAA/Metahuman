<?php

namespace University;

class Student
{
    private $name;
    private $scheduleNumber;

    public function __construct($name, $scheduleNumber)
    {
        $this->name = $name;
        $this->scheduleNumber = $scheduleNumber;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getScheduleNumber()
    {
        return $this->scheduleNumber;
    }
}
