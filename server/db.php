<?php

require_once __DIR__.'/../model/Category.php';
require_once __DIR__.'/../model/Product.php';
require_once __DIR__.'/../model/Food.php';
require_once __DIR__.'/../model/Game.php';
require_once __DIR__.'/../model/Kennel.php';
require_once __DIR__.'/../model/Client.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$newProduct1 = new Food(
    'dog',
    'fa-dog',
    '10 kg + 2 kg gratis! 12 kg Almo Nature Holistic',
    32.49,
    true,
    '0000001',
    [
        'https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/almo/nature/holistic/1/400/26708_pla_almo_nature_holistic_adult_huhn_reis_medium_744_12kg_dog_1.jpg',
        'https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/almo/nature/holistic/5/400/70014_pla_almo_holistic_medium_puppy_huhn_reis_740_12kg_dog_5.jpg',
        'https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/almo/nature/holistic/6/400/26712_pla_almo_nature_holistic_adult_lachs_reis_medium_745_12kg_dog_6.jpg'
    ],
    2.71,
    12,
    'Per produrre gli alimenti per cani Almo Nature Holistic vengono impiegati componenti ipoallergenici di alta qualit√†. La formulazione bilanciata di queste crocchette soddisfa al meglio il fabbisogno nutrizionale naturale del cane. Almo Nature √® arricchito con una speciale miscela di nutraceutici che lo rendono particolarmente adatto a cani con problemi di ipersensibilit√† alimentare.',
    '2024/03/02',
    '...'

);
$newProduct2= new Food(
    'dog',
    'fa-dog',
    'Almo Nature HFC Adult XS-S Pollo Crocchette per cani',
    13.99,
    false,
    '0000002',
    ['https://shop-cdn-m.mediazs.com/bilder/almo/nature/hfc/adult/xss/pollo/crocchette/per/cani/5/400/360097_pla_almonature_adult_hund_huhn_1_2kg_hs_01_5.jpg','https://shop-cdn-m.mediazs.com/bilder/wolf/of/wilderness/mini/blue/river/salmone/8/400/wow_classic_blueriver_mini_1kg_1000x1000_8.jpg','https://shop-cdn-m.mediazs.com/bilder/wolf/of/wilderness/mini/blue/river/salmone/5/400/wow_classic_blue_river_12kg_5.jpg'],
    11.66,
    1.2,
    'Crocchette monoproteiche per cani di taglia piccola, ricche di carne fresca di pollo, con riso come fonte di carboidrati, prebiotici naturali e mix di micronutrienti, senza coloranti artificiali.',
    '2023/03/09',
    '...'

);
$newProduct3 = new Food(
    'cat',
    'fa-cat',
    '20 + 4 gratis! 24 x 70 g Almo Nature Alimento umido per gatti',
    21.59,
    true,
    '0000003',
    ['https://shop-cdn-m.mediazs.com/bilder/gratis/x/g/almo/nature/alimento/umido/per/gatti/5/400/72698_pla_almonature_meerestieremischung_5.jpg','https://shop-cdn-m.mediazs.com/bilder/gratis/x/g/almo/nature/alimento/umido/per/gatti/7/400/64488_pla_almonature_atlantikthunfisch_7.jpg','https://shop-cdn-m.mediazs.com/bilder/gratis/x/g/almo/nature/alimento/umido/per/gatti/3/400/69356_pla_almonature_thunfischgarnele_3.jpg'],
    12.85,
    12,
    "L'alimento umido per gatti Almo Nature ti sorprender√† non solo per la sua qualit√† e variet√†, ma anche per l'elevata percentuale di pezzetti di carne e pesce fresco (almeno il 70%) in origine idonei anche al consumo umano. 
    Grazie al procedimento di cottura delicato nel proprio brodo, le proteine e i micronutrienti vengono conservati in modo naturale. Cos√¨ si ottiene un ottimo profilo nutrizionale che soddisfa appieno le esigenze fisiologiche del gatto.",
    '2025/05/02',
    '...'

);

$newProduct4 = new Game(
    'dog',
    'fa-dog',
    'Gioco per cani Scimmietta in corda di cotone',
    4.29,
    true,
    '0000004',
    ['https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/scimmietta/in/corda/di/cotone/2/400/1_139205_sincere_baumwolltau__1_2.jpg','https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/scimmietta/in/corda/di/cotone/1/400/139205_sincere_3baumwolltau_1.jpg','https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/scimmietta/in/corda/di/cotone/1/400/139205_sincere_4baumwolltau_1.jpg'],
    "Gioco Scimmietta per cuccioli e cani di tg. piccola in corda intrecciata, per riporto e tira e molla, resiste anche ai denti pi√Ļ aguzzi, pulisce delicatamente i denti durante il gioco.",
    1

);

$newProduct5 = new Game(
    'cat',
    'fa-cat',
    'Gioco per gatti zooplus Catnip Rose',
    21.59,
    true,
    '0000005',
    ['https://shop-cdn-m.mediazs.com/bilder/gioco/per/gatti/zooplus/catnip/rose/2/400/318597_zooplus_katzenspielzeug_catniprose_hs_04_2.jpg'],
    "L'alimento umido per gatti Almo Nature ti sorprender√† non solo per la sua qualit√† e variet√†, ma anche per l'elevata percentuale di pezzetti di carne e pesce fresco (almeno il 70%) in origine idonei anche al consumo umano. 
    Grazie al procedimento di cottura delicato nel proprio brodo, le proteine e i micronutrienti vengono conservati in modo naturale. Cos√¨ si ottiene un ottimo profilo nutrizionale che soddisfa appieno le esigenze fisiologiche del gatto.",
    1

);

$newProduct6 = new Kennel(
    'dog',
    'fa-dog',
    'Letto Memory ovale - marrone',
    82.99,
    false,
    '0000006',
    ['https://shop-cdn-m.mediazs.com/bilder/letto/memory/ovale/marrone/7/400/67053_hundebett_memory_oval_braun_fg_3288_7.jpg','https://shop-cdn-m.mediazs.com/bilder/letto/memory/ovale/marrone/4/400/67053_hundebett_memory_oval_braun_fg_3303_4.jpg'],
    "Letto ortopedico per cani con materasso in Memory-Foam, bordo imbottito e coperta in pellicciotto Teddy, lavabile a 30¬į C - per cani sportivi, anziani e con particolari esigenze.",
    0

);

$newProduct7 = new Kennel(
    'cat',
    'fa-cat',
    'Nicchia per gatti Canadian Cat Company',
    44.99,
    true,
    '0000007',
    ['https://shop-cdn-m.mediazs.com/bilder/nicchia/per/gatti/canadian/cat/company/5/400/346597_pla_canadiancat_company_katzennest_hs_01_5.jpg','https://shop-cdn-m.mediazs.com/bilder/nicchia/per/gatti/canadian/cat/company/2/400/346597_pla_canadiancat_company_katzennest_hs_02_2.jpg','https://shop-cdn-m.mediazs.com/bilder/nicchia/per/gatti/canadian/cat/company/8/400/tre_puntini_43__8.jpg','https://shop-cdn-m.mediazs.com/bilder/nicchia/per/gatti/canadian/cat/company/7/400/346597_pla_canadiancat_company_katzennest_hs_06_7.jpg'],
    "Nicchia in caldo feltro blu chiaro e antracite per gatti o cani di taglia piccola, con soffice cuscino double-face e gommini anti-scivolo, ideale per animali che amano riposare nascosti .",
    1

);


$adminUser = new Client(
    'Roberto',
    'Larivera',
    'user',
    '1234',
    '1234',
    '0123456789012345',
    '2024-01',
    'Roberto Larivera',
    '123'
);




$foodProducts = [$newProduct1,$newProduct2,$newProduct3];
$gameProducts = [$newProduct4,$newProduct5];
$kennelProducts = [$newProduct6,$newProduct7];

$_SESSION['foodProducts'] = $foodProducts;
$_SESSION['gameProducts'] = $gameProducts;
$_SESSION['kennelProducts'] = $kennelProducts;