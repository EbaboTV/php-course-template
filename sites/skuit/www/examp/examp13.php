<?php
$cardNumber = "1234 5678 9876 5432";
echo str_replace(' ','',$cardNumber);

$balance = 500;
if($balance < 100){
    echo "Пополни счёт";
}else {
    echo "Всё нармально";
}

$masiv = [100, 50, 25];
$sum = 0;
foreach ($masiv as $m){
    $sum += $m;
}
echo "Общая сумма расходов: $sum";

$isBlocked = false;
if($isBlocked){
    echo "Всё окей";
}else {
    echo "Карта заблокирована";
}

function isLowBalance(int $balance): bool {
    return $balance > 100;
}

$tBalanse = 120;
if(isLowBalance($tBalanse)){
    echo "Достаточно средств";
}else {
    echo "Недостаточно средств";
}