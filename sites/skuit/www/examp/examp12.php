<?php
$username = "alex_1995";
echo str_contains($username, '_');

$likes = 75;
if($likes > 100){
    echo "Популярный пост";
}else {
    echo "Обычный пост";
}

$masiv = [10, 20, 30];
$sum = 0;
foreach ($masiv as $m){
    $sum += $m;
}
echo "Общее количество лайков: $sum";

$isOnline = false;
if($isOnline){
    echo "Пользователь онлайн";
}else {
    echo "Не в сети";
}

function hasManyLikes(int $likes): bool {
    return $likes > 100;
}

$tlikes = 59;
if (hasManyLikes($tlikes)){
    echo "много лайков";
}else {
    echo "мало лайков";
}