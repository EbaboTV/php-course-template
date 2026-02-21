<?php
$carModel = "bmw";
echo ucfirst($carModel);

$speed = 130;
if($speed > 120){
    echo "Превышение скорости";
}else {
    echo "Всё оке";
}

$masiv = [60, 80, 100];
$max = $masiv[0];
foreach ($masiv as $m){
    if($max > $max){
        $max = $m;
    }
}
echo "Максимальная скорость: $max";

$isEngineOn = true;
if($isEngineOn){
    echo "Включён";
}else {
    echo "Выключён";
}

function isSpeeding(int $speed): bool {
    return $speed > 120;
}

$tSpeed = 140;
if(isSpeeding($tSpeed)){
    echo "Оке";
}else {
    echo "не оке";
}