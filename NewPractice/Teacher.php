<?php

class Teacher
{
    private $name;
    private $title;

    public function __construct($name, $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function getTeacherInfo()
    {
        return "{$this->title}.{$this->name}" . PHP_EOL;
    }
}
?>
