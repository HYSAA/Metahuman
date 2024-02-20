<?php

class School
{
    private $name;
    private $classSchedules = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addClassSchedule(ClassSchedule $classSchedule)
    {
        $this->classSchedules[] = $classSchedule;
    }

    public function getSchoolInfo()
    {
        $info = "University of {$this->name}\n\n";
        foreach ($this->classSchedules as $index => $classSchedule) {
            $info .= $classSchedule->getClassScheduleInfo($index + 1);
        }
        return $info;
    }
}
?>
