<?php
require_once __DIR__.'/model/Category.php';
require_once __DIR__.'/model/Product.php';
require_once __DIR__.'/model/Food.php';
// require_once __DIR__.'/model/Game.php';
// require_once __DIR__.'/model/Kennel.php';


var_dump(new Food(
    'Cani',
    '#',
    '10 kg + 2 kg gratis! 12 kg Almo Nature Holistic',
    32.49,
    2.71,
    true,
    0000001,
    [],
    12,
    '.........',
    '09/2023',
    '.........'

));

$newProduct1 = new Food(
    'Cani',
    '#',
    '10 kg + 2 kg gratis! 12 kg Almo Nature Holistic',
    32.49,
    2.71,
    true,
    0000001,
    [],
    12,
    '.........',
    '09/2023',
    '.........'

);