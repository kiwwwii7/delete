<?php

function summa($masivs) 
{
    $summa = 0;
    for ($i = 0; $i < count($masivs); $i++) {
        $summa += $masivs[$i];
    }

    return $summa;
}

function reizini($a, $b) {
    return $a * $b;
}

function foo() {
    return 'bar';
}

// Uzdevums 1
$numbers = [1, 2, 3, 4, 5];
$summaFor = 0;

for ($i = 0; $i < 5; $i++) {
    // $summaFor += $numbers[$i]; // Short version
    $summaFor = $summaFor + $numbers[$i]; // Long version
}


$summaForeach = 0;

foreach ($numbers as $number) {
    $summaForeach += $number;
}


$j = 0;
$summaWhile = 0;
while ($j < 5) {
    $summaWhile += $numbers[$j];
    $j++;
}


$k = 0;
$summaDoWhile = 0;

do {
    $summaDoWhile += $numbers[$k];
    $k++;
} while ($k < 5);


// Uzdevums 2
$numbersTwo = [4, 43, 35, 53 ,60, 3, 30];
$max = $numbersTwo[0];

for($i = 0; $i < 7; $i++) {
    if ($max < $numbersTwo[$i]) {
        $max = $numbersTwo[$i];
    }
}


// Uzdevums 6
$numbersSix = ['a', 'b', 'c', 'd', 'e'];
// $reversed = array(); // Old version
$reversed = []; // New version (recommended)

for ($i = 0; $i < 5; $i++) {
    $reversed[5 - $i - 1] = $numbersSix[$i];
}


$summaFunkcija = summa($numbers);


$arrAssoc = [
    'c' => 35, 
    'd' => 53 ,
    'a' => 4, 
    'b' => 43, 
    'e' => 60, 
    'r' => 3, 
    'n' => 30
];

$arrAssoc['r'] = 'uihervi';
$arrAssoc['rds'] = 'uissdthervi';
$arrAssoc[] = 'dasd';

$dati = [
    'vards' => 'Kevins',
    'uzvards' => 'Melnikonis',
    'epasts' => 'kevins.melnikonis@gmail.com',
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Uzdevums 1: <pre><?= var_dump($numbers, $summaFor, $summaForeach, $summaWhile, $summaDoWhile); ?> </pre>
    Uzdevums 2: <pre><?= var_dump($numbersTwo, $max); ?> </pre>
    Uzdevums 6: <pre><?= print_r($numbersSix); ?> </pre><pre><?= print_r($reversed); ?> </pre>
    Masīvs: <pre><?= print_r($arrAssoc) ?></pre>
    Summa(): <?= $summaFunkcija ?>
    reizini(): <?= reizini(5, 8) ?>
    foo(): <?= foo() ?>

    <div>
        <?php foreach($dati as $atslega => $vertiba) {?>
            <p><b><?= $atslega ?></b>: <?= $vertiba ?></p>
            <?php } ?>
    </div>
</body>

</html>