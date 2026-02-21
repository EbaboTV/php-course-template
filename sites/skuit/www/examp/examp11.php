<?php
$productName = "iphone 15 pro";
echo strtoupper($productName);

$price = 1200;
if($price > 1000){
    echo "Дорогой товар";
}else {
    echo "Обычный товар";
}

$masiv = [100, 250, 300, 150];
$sum = 0;
foreach ($masiv as $m){
    $sum += $m;
}
echo "$sum";

$isInStock = true;
if($isInStock){
    echo "Можно купить";
}else {
    echo "Нет в наличии";
}

function isExpensive(int $price1): bool {
    return $price1 > 1000;
}

$tPrise = 800;
if (isExpensive($tPrise)){
    echo "true";
}else {
    echo "Folse";
}