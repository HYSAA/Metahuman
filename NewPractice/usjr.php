<?php

include 'Autoloader.php';

$school = new School("San Jose- Recoletos");

$classSchedule1 = new ClassSchedule("ITELEC1A", "10:00am-11:30am");
$classSchedule1->addTeacher(new Teacher("Gregg Gabison", "Dr."));
$classSchedule1->addTeacher(new Teacher("Marisa Mahilum", "Ms."));
$classSchedule1->addStudent(new Student("Abastas, Clint"));
$classSchedule1->addStudent(new Student("Bunac, James"));
$classSchedule1->addStudent(new Student("Cabatingan, Eugene"));

$classSchedule2 = new ClassSchedule("ITELEC1A", "8:30am-10:00am");
$classSchedule2->addTeacher(new Teacher("Roderick Bandalan", "Mr."));
$classSchedule2->addStudent(new Student("Artiaga, Resty"));
$classSchedule2->addStudent(new Student("Chan, Donnah Marizh"));
$classSchedule2->addStudent(new Student("Libato, Mikee"));

$school->addClassSchedule($classSchedule1);
$school->addClassSchedule($classSchedule2);

echo nl2br($school->getSchoolInfo());
?>
