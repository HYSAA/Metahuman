<?php

namespace University;

class Discipline
{
    private $name;
    private $numLectures;
    private $numExercises;

    public function __construct($name, $numLectures, $numExercises)
    {
        $this->name = $name;
        $this->numLectures = $numLectures;
        $this->numExercises = $numExercises;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumLectures()
    {
        return $this->numLectures;
    }

    public function getNumExercises()
    {
        return $this->numExercises;
    }
}
