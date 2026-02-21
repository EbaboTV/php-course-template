<?php

$name = "john";
echo strlen($name );

$steps = 12000;
if($steps > 10000){
    echo "Цель выполнена ";
}else{
    echo "Цель не выполнена ";
}

$masiv = [8000, 12000, 9000];
$sum = 0;
foreach ($masiv as $m){
    $sum += $m;
}
echo "Общее количество шагов: $sum ";

$hasMembership = true;
if($hasMembership){
    echo "Зал доступен";
}else {
    echo "Зал недоступен";
}

function isGoalReached(int $steps): bool {
    return $steps > 10000;
}

$tSteps = 12000;
if(isGoalReached($tSteps)){
       echo "Цель выполнена ";
}else{
    echo "Цель не выполнена ";
}