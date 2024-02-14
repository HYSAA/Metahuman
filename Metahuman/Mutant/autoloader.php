<?php

namespace Metahuman\Mutant;

class Mutant
{
    public function __construct()
    {
        echo "I am a Mutant!\n";
    }
}

class Hero
{
    public function __construct()
    {
        echo "I am a Mutant Hero!\n";
    }
}

class Villain
{
    public function __construct()
    {
        echo "I am a Mutant Villain!\n";
    }
}

namespace Metahuman\NonMutant;

class NonMutant
{
    public function __construct()
    {
        echo "I am a Non-Mutant!\n";
    }
}

class Hero
{
    public function __construct()
    {
        echo "I am a Non-Mutant Hero!\n";
    }
}

class Villain
{
    public function __construct()
    {
        echo "I am a Non-Mutant Villain!\n";
    }
}

$mutant = new \Metahuman\Mutant\Mutant();
$mutantHero = new \Metahuman\Mutant\Hero();
$mutantVillain = new \Metahuman\Mutant\Villain();

$nonMutant = new \Metahuman\NonMutant\NonMutant();
$nonMutantHero = new \Metahuman\NonMutant\Hero();
$nonMutantVillain = new \Metahuman\NonMutant\Villain();


