<?php

class ClassSchedule
{
    private $textIdentifier;
    private $time;
    private $teachers = [];
    private $students = [];

    public function __construct($textIdentifier, $time)
    {
        $this->textIdentifier = $textIdentifier;
        $this->time = $time;
    }

    public function addTeacher(Teacher $teacher)
    {
        $this->teachers[] = $teacher;
    }

    public function addStudent(Student $student)
    {
        $this->students[] = $student;
    }

    public function getClassScheduleInfo($number)
    {
        $info = "$number {$this->textIdentifier} {$this->time}\nTeachers:\n";
        foreach ($this->teachers as $teacher) {
            $info .= $teacher->getTeacherInfo();
        }
        $info .= "\nStudents:\n";
        foreach ($this->students as $student) {
            $info .= $student->getStudentInfo();
        }
        $info .= "\n";
        return $info;
    }
}
?>
