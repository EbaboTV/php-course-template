<?php
$address = "amsterdam";
echo ucfirst($address);

$deliveryTime = 45;
if($deliveryTime > 60){
    echo "Долгая доставка";

}else {
    echo "Нормальная доставка";
}

$masiv = [2, 1, 3];
$sum = 0;
foreach($masiv as $m){
    $sum += $m;
}
echo "Общее количество заказов: $sum";

$isPaid = true;
if($isPaid){
    echo "Оплачено";
}else {
    echo "Неоплачено";
}

function isFastDelivery(int $minutes): bool {
    return $minutes < 60;
}

$tminutes = 50;
if(isFastDelivery($tminutes)){
    echo "Быстрая доставка";
}else {
    echo "Придёться подождать";
}