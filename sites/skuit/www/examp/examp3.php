<?php 
$course = "php for beginners";
echo ucwords($course);

$rating = 4.5;
if ($rating > 4){
    echo "Популярный курс\n";
}else {
    echo "Обычный курс\n";
}

$students = [15, 22, 18, 24];
$sum = 0;
$count = count($students);
foreach ($students as $s){
    $sum += $s;
}
$averst = $sum / $count;
echo "Средняя $averst\n";

$isPremium = true;
if ($isPremium){
    echo "Доступ к премиум-урокам есть\n";
}else {
    echo "Доступ к премиум-урокам нет \n";
}

function isPopular(float $rating): bool {
    return $rating > 4;
}

$testrating = 4.2;
if (isPopular($testrating)){
    echo "Популярный";
}else {
    echo "Непопулярный";
}
