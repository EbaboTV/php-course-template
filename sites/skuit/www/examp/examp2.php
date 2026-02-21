<?php 
$cardNumber = "1234 5678 9876 5432";
echo str_replace(' ', '', $cardNumber);

$balance = 500;
if ($balance < 100){
    echo "Всё нармально\n";
}else {
    echo "Пополни счёт\n";
}

$number = [100, 50, 25];
$sum = 0;
foreach ($number as $n){
    $sum += $n;
}
echo "общую сумму расходов: $sum\n";

$isBlocked = false;
if ($isBlocked){
    echo "статус карты ++\n";
}else{
    echo "статус карты --\n";
}

function isLowBalance(int $balance1): bool {
    return $balance1 < 100;
}

$balance1 = 30;
if (isLowBalance(300)){
    echo "da";
}else {
    echo "net";
}