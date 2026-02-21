<?php
// Пример первого 
$name = "john";
echo strlen($name);

$email = "test@gmail.com";
if (str_contains($email, '@')) {
    echo "Содержит\n";
} else {
    echo "Несодержит\n";
}
//Пример второго
$temperature = -3; 
if ($temperature > 0) {
    echo "Тепло\n";
} else {
    echo "Холодно\n";
}

$score = 85;
if ($score >= 60) {
    echo "Сдал\n";
} else {
    echo "Неслдал\n";
}
//Пример третьего
$numbers = [10, 20, 30, 40];
$sum = 0;
foreach($numbers as $n ){
    $sum += $n;
}
echo "$sum\n";

$values = [5, 8, 3, 9];
$max = $values[0];
foreach ($values as $val) {
    if ($val > $max) $max = $val;
} 
echo "Максимальное: $max\n";
// Пример четвертого
$isPaid = false;
if ($isPaid) {
    echo "Оплачено\n";
} else {
    echo "Не оплачено\n";
}
$isMember = true;
if ($isMember) {
    echo "Доступ есть\n";
} else {
    echo "Доступа нет\n";
}
//Пример пятого
function isAdult(int $age) : bool {
    return $age >= 18;
}
$age = 20;
if (isAdult($age)) {
    echo "Взросый\n";
} else {
    echo "Не взросый\n";
}
?>