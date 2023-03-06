<?php
require_once __DIR__.'/model/Category.php';
require_once __DIR__.'/model/Product.php';
require_once __DIR__.'/model/Food.php';
// require_once __DIR__.'/model/Game.php';
// require_once __DIR__.'/model/Kennel.php';

$newProduct1 = new Food(
    'dog',
    'fa-dog',
    '10 kg + 2 kg gratis! 12 kg Almo Nature Holistic',
    32.49,
    2.71,
    true,
    0000001,
    ['https://picsum.photos/100/100'],
    12,
    'Per produrre gli alimenti per cani Almo Nature Holistic vengono impiegati componenti ipoallergenici di alta qualità. La formulazione bilanciata di queste crocchette soddisfa al meglio il fabbisogno nutrizionale naturale del cane. Almo Nature è arricchito con una speciale miscela di nutraceutici che lo rendono particolarmente adatto a cani con problemi di ipersensibilità alimentare.',
    '09/2023',
    'Proteine gregge	25.0 %'

);
$newProduct2= new Food(
    'dog',
    'fa-dog',
    'Almo Nature HFC Adult XS-S Pollo Crocchette per cani',
    13.99,
    11.66,
    false,
    0000002,
    ['https://picsum.photos/100/100'],
    1.2,
    'Crocchette monoproteiche per cani di taglia piccola, ricche di carne fresca di pollo, con riso come fonte di carboidrati, prebiotici naturali e mix di micronutrienti, senza coloranti artificiali.',
    '09/2023',
    'Proteine gregge	26.0 %'

);
$newProduct3 = new Food(
    'cat',
    'fa-cat',
    '20 + 4 gratis! 24 x 70 g Almo Nature Alimento umido per gatti',
    21.59,
    12.85,
    true,
    0000003,
    ['https://picsum.photos/100/100'],
    12,
    "L'alimento umido per gatti Almo Nature ti sorprenderà non solo per la sua qualità e varietà, ma anche per l'elevata percentuale di pezzetti di carne e pesce fresco (almeno il 70%) in origine idonei anche al consumo umano. 
    Grazie al procedimento di cottura delicato nel proprio brodo, le proteine e i micronutrienti vengono conservati in modo naturale. Così si ottiene un ottimo profilo nutrizionale che soddisfa appieno le esigenze fisiologiche del gatto.",
    '09/2023',
    'Proteine gregge	11.3 %'

);

$products = [$newProduct1,$newProduct2,$newProduct3];