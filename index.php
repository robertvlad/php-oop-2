<?php

include_once __DIR__ . '/Models/products.php';
include_once __DIR__ . '/Models/food.php';
include_once __DIR__ . '/Models/games.php';
include_once __DIR__ . '/Models/boxes.php';


$categoryDog = new category('Cane');
var_dump($categoryDog);

$categoryCat = new category('Gatto');
var_dump($categoryCat);


$foodDog = new food('Scatoletta', 'imgcane.png', 19.99, $categoryDog, '01/01/2023', 10, ['Maiale', 'Pollo', 'Vitello']);
var_dump($foodDog);

$foodCat = new food('Croccantini', 'imggatto.png', 14.99, $categoryCat, '01/01/2023', 5, ['Verdure', 'Pesce']);
var_dump($foodCat);

$gamesDog = new games('Pallina di gomma', 'imgpallina.png', 9.99, $categoryDog, '10x10', ['gomma']);
var_dump($gamesDog);

$boxDog = new boxes('Casetta di legno', 'imgcasetta.png', 29.99, $categoryDog, 'Outdoor', 'large', ['legno', 'ferro']);
var_dump($boxDog);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>Animals Shop</title>
    </head>
    <body>

        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.2/axios.min.js" integrity="sha512-NCiXRSV460cHD9ClGDrTbTaw0muWUBf/zB/yLzJavRsPNUl9ODkUVmUHsZtKu17XknhsGlmyVoJxLg/ZQQEeGA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>