<?php

include_once __DIR__ . '/Models/products.php';
include_once __DIR__ . '/Models/food.php';
include_once __DIR__ . '/Models/games.php';
include_once __DIR__ . '/Models/boxes.php';


$categoryCane = new category('Cane', 'dog.png');
// var_dump($categoryCane);

$categoryGatto = new category('Gatto', 'cat.png');
// var_dump($categoryGatto);

$foodDog = new food('Croccantini Oasy ', 'dog-food.jpg', 19.99, $categoryCane, 10, ['Maiale - ', 'Pollo - ', 'Vitello '], '2022-12-30');
// var_dump($foodDog);

$foodCat = new food('Croccantini Meow Mix', 'cat-food.jpg', 19.99, $categoryGatto, 10, ['Salmone - ', 'Verdure - ', 'Fibre - ', 'Molluschi'], '2022-10-25');
// var_dump($foodCat);

$gameDog = new games('Osso di gomma', 'osso-cane.jpg', 9.99, $categoryCane, 'L 40 x P 9 x H 4.5', ['Plastica - ', 'Caucciù ']);
// var_dump($gameDog);

$gameCat = new games('Cannetta con topo', 'gioco-gatto.jpg', 4.99, $categoryGatto, '50', ['Plastica - ', 'Gomma - ', 'Tessuto']);
// var_dump($gameCat);

$boxDog = new boxes('Casetta di legno', 'cuccia-cane.jpg', 39.99, $categoryCane, 'Outdoor', 'L 132 x P 85 x H 86', ['Legno di abete rosso - ', 'Bitume - ', 'Ferro ']);
// var_dump($boxDog);

$boxCat = new boxes('Tiragraffi', 'tiragraffi.jpg', 79.99, $categoryGatto, 'Indoor', 'Big', ['Velcro - ', 'Legno - ', 'Plastica - ', 'Sisal - ', 'Imbottito']);
// var_dump($boxCat);


include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/main.php';
include __DIR__ . '/partials/footer.php';

?>