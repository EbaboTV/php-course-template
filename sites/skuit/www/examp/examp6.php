<?php
$film = "avatar 2";
echo strlen($film);

$ticketPrice = 350; 
if($ticketPrice < 300){
    echo "Дешёвый билет";
}else {
    echo "Обычная цена";
}

$viewers = [120, 85, 200, 150];
$max =$viewers[0];
foreach ($viewers as $v){
    if($max > $v) {
        $max = $v;
    }
}
echo "$max";

$is3D = true;
if($is3D){
    echo "Фильм в 3D";
}else {
    echo "Обычный формат";
}

function isCheapTicket(int $price): bool{
    return $price < 300;
}

$tPrice = 280;
if (isCheapTicket($tPrice)){
    echo "Дешовый билет";
}else {
    echo "Нормальный белет";
}
