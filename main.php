<?php

require_once 'classes/Cow.php';
require_once 'classes/Chicken.php';
require_once 'classes/Farm.php';

const CHICKEN_COUNT = 20;
const COW_COUNT = 10;

$farm = new Farm();

for ($i = 0; $i<CHICKEN_COUNT; $i++){
    $animal = new Chicken();
    $farm->addAnimal($animal);
}

for ($i = 0; $i<COW_COUNT; $i++){
    $animal = new Cow();
    $farm->addAnimal($animal);
}

$farm->collectProducts();

$farm->showHarvest();