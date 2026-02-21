<?php
$sport = "football";
echo strtoupper($sport);

$calories = 450;
if ($calories > 400){
    echo "Высокая нагрузка";
}else {
    echo "Средняя нагрузка";
}

$workoutMinutes = [45, 30, 60, 25, 50];
$sum = 0;
foreach ($workoutMinutes as $w){
    $sum += $w;
} 
echo "$sum";

$hasTrainer = true;
if($hasTrainer){
    echo "Тренировка с тренером";
}else {
    echo "Самостоятельная тренировка";
}

function isHighIntensity(int $calories): bool {
    return $calories > 400;
}

$testC = 450;
if(isHighIntensity($testC)){
    echo "Норма";
}else {
    echo "Много";
}