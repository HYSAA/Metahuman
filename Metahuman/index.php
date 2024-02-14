<?php

require_once 'metahuman/Mutant/Mutant.php';
require_once 'metahuman/Mutant/Hero.php';
require_once 'metahuman/Mutant/Villain.php';
require_once 'metahuman/NonMutant/NonMutant.php';
require_once 'metahuman/NonMutant/Hero.php';
require_once 'metahuman/NonMutant/Villain.php';

// Example usage
$mutant = new \Metahuman\Mutant\Mutant();
$mutantHero = new \Metahuman\Mutant\Hero();
$mutantVillain = new \Metahuman\Mutant\Villain();

$nonMutant = new \Metahuman\NonMutant\NonMutant();
$nonMutantHero = new \Metahuman\NonMutant\Hero();
$nonMutantVillain = new \Metahuman\NonMutant\Villain();
