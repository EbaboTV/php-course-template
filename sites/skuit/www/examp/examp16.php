<?php
$city = "rotterdam";
echo strtoupper($city);

$temperature = -5;
if ($temperature < 0){
    echo "Мороз";
}else {
    echo "Тепло";
}

$masiv = [5, -2, 3];
$sum = 0;
$count = count($masiv);
foreach ($masiv as $m){
    $sum += $m;
}
$kol = $sum / $count ;
echo "Среднее значение: $kol";

$isRaining = true;
if($isRaining){
    echo "Возьмите зонт";
}else {
    echo "Небери зонт";
}

function isCold(int $temperature): bool {
    return $temperature > 0;
}

$tTemper = 12;
if(isCold($tTemper)){
    echo "Тепло";
}else {
    echo "Холодно";
}