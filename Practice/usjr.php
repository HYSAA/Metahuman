<?php

require_once 'autoload.php';
use University\Discipline;
use University\Teacher;
use University\ClassSchedule;
use University\Student;
use University\School;

class usjr
{
    public function __construct()
    {
        // Create instances of School, ClassSchedule, Student, Teacher, Discipline, and test functionalities

        // Test data for Discipline
        $discipline = new Discipline('Math', 20, 10);

        // Test data for Teacher
        $teacher1 = new Teacher('John Doe', 'Math Instructor');
        $teacher2 = new Teacher('Jane Smith', 'English Teacher');

        // Test data for ClassSchedule
        $classSchedule = new ClassSchedule('CS101');

        // Test data for Student
        $student1 = new Student('Alice Smith', 'S123');
        $student2 = new Student('Bob Johnson', 'S124');

        // Test data for School
        $school = new School('University of Example', 'Example City');

        // Display information
        echo "Discipline: " . $discipline->getName() . "\n\n";

        // Display information for teachers
        echo "Teacher 1: " . $teacher1->getName() . "\tTitle: " . $teacher1->getTitle() . "\n";
        echo "Teacher 2: " . $teacher2->getName() . "\tTitle: " . $teacher2->getTitle() . "\n\n";

        echo "Class Schedule: " . $classSchedule->getTextIdentifier() . "\n\n";

        // Display information for students
        echo "Student 1: " . $student1->getName() . "\tSchedule Number: " . $student1->getScheduleNumber() . "\n";
        echo "Student 2: " . $student2->getName() . "\tSchedule Number: " . $student2->getScheduleNumber() . "\n\n";

        // Display information for the school
        echo "School: " . $school->getName() . "\tLocation: " . $school->getLocation() . "\n";
    }
}

// Usage
$usjr = new usjr();
