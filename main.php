<?php

namespace Farm;

require_once __DIR__ . '/vendor/autoload.php';

const CHICKEN_COUNT = 20; // количество кур
const COW_COUNT = 10; // количество коров

$farm = new Farm();

// заполнение фермы
for ($i = 0; $i<CHICKEN_COUNT; $i++){
    $animal = new Chicken();
    $farm->addAnimal($animal);
}

for ($i = 0; $i<COW_COUNT; $i++){
    $animal = new Cow();
    $farm->addAnimal($animal);
}

// собираем урожай
$farm->collectProducts();

// выводим урожай
$farm->showHarvest();