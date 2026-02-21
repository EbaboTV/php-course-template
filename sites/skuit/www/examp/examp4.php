<?php 
$country = "france";
echo ucfirst($country);

$distance = 350;
if ($distance > 300){
    echo "Дальняя поездка\n";
}else {
    echo "Близко\n";
}

$temperatures = [25, 27, 26, 28, 24, 23];
$min = $temperatures[0];
foreach ($temperatures as $t){
    if($t < $min){
        $min = $t;
    }
}
echo "$min";

$hasVisa = false;
if ($hasVisa){
    echo "Есть втза";
}else {
    echo "Нет визы";

}

function isLongTrip(int $km): bool {
    return $km > 300;
}

$testKM = 400;
if (isLongTrip($testKM)){
    echo "Дальняя";
}else {
    echo "Близкая";
}