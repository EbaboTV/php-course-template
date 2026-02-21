<?php

$position = "developer";
echo strlen($position);

$salary = 2500;
if($salary > 3000){
    echo "Высокая зарплата";
}else {
    echo "Маленькая зп";
}

$masiv = [2500, 2600, 2550];
$sum = 0;
$count = count($masiv);
foreach ($masiv as $m){
    $sum += $m;
}
$kol = $sum / $count;
echo "$kol";

$isRemote = true;
if($isRemote){
    echo "Удаленная работа";
}else {
    echo "Офис";
}

function isHighSalary(int $salary): bool {
    return $salary >3000;
}

$tSal = 4000;
if(isHighSalary($tSal)){
    echo "много";
}else {
    echo "Малл";
}