<?php

require_once '../vendor/autoload.php';

$shawarma1 = new \www\mariya\Meny\ShawarmaBaraniya();
$shawarma2 = new \www\mariya\Meny\ShawarmaGowaja();
$shawarma3 = new \www\mariya\Meny\ShawarmaOdessa();

echo $shawarma1->getTitle() . '<br>Цена: ' . $shawarma1->getCost() . ' гривен' . '<br>Ингридиенты: ' . implode(', ', $shawarma1->getIngredients());
echo '<br><br>';
echo '<br><br><br>';


$bag = new \www\mariya\Shawarma\ShawarmaCalculator\ShawarmaCalculator();
$bag->add($shawarma1);
$bag->add($shawarma2);
$bag->add($shawarma3);
echo 'Корзина:';
echo '<br><br>';
echo implode(', ', $bag->getBag());
echo '<br><br>';
echo 'Цена: ' . $bag->getCost();
echo '<br><br>';
echo 'Ингридиенты: ' . implode(', ', $bag->getIngredients());