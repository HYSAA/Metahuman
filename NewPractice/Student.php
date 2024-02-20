<?php

class Student
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getStudentInfo()
    {
        return "{$this->name}" . PHP_EOL;
    }
}
?>
