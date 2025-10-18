<?php
$name = 'Павлов Эрик Сергеевич';
$age = 19;
?>

<title><?= $name?></title>
<?for ($age; $age > 0; $age-- ) :?>
    <p> <?= $age?> </p>
    <?endfor?>