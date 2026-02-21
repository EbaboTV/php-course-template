<?php
$movie = "avatar";
echo strtoupper($movie);

$age = 15;
if($age < 16){
    echo "Доступ запрещен";
}else {
    echo "Можна можна";
}

$masiv = [10, 20, 15];
$sum = 0;
foreach ($masiv as $m){
    $sum += $m;
}
echo "$sum";

$hasTicket = true;
if($hasTicket){
    echo "Можно пройти";
}else {
    echo "Нельзя пройти";
}

function canWatch(int $age): bool {
    return $age >= 16;
}

$tAge = 15;
if(canWatch($tAge)){
    echo "Большой";
}else {
    echo "Маленький";
}