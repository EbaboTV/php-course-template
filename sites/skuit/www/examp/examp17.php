<?php
$email = "student@gmail.com";
echo str_contains($email, '@');

$score = 85;
if($score > 60){
    echo "Сдал";
}else {
    echo "НЕсдал";
}

$masiv = [70, 80, 90];
$sum = 0;
$count = count($masiv);
foreach($masiv as $m){
    $sum += $m;
}

$kol = $sum / $count;
echo "Среднее кол-во: $kol";

$hasHomework = false;
if($hasHomework){
    echo "Сделано";
}else {
    echo "Несделано";
}

function isPassed(int $score): bool {
    return $score > 60;
}

$tScore = 70;
if(isPassed($tScore)){
    echo "Отлично";
}else {
    echo "Хорошо";
}
