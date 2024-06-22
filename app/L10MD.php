<?php 

$numbers1 = [1, 2, 3, 4, 5];
$sum = array_sum($numbers1);

$numbers2 = [4, 43, 35, 53, 60, 3, 30];
$max = max($numbers2);

$numbers3 = [1, 2, 3, 4, 5];
$sum2 = array_sum($numbers3);
$count = count($numbers3);
$average = $sum2 / $count;

$numbers4 = [4, 43, 35, 53, 60, 3, 30];
$min = min($numbers4);

$numbers5 = [4, 43, 35, 53, 60, 3, 30];
$oddCount = 0;
$evenCount = 0;

foreach ($numbers5 as $skaitlis) {
    if ($skaitlis % 2 == 0) {
        $evenCount++;
    } else {
        $oddCount++;
    }
}

$numbers6 = [1, 2, 3, 4, 5];
$reverse = array_reverse($numbers6);

$array1 = [1, 2, 3];
$array2 = [5, 6, 7];
$combined = array_merge($array1, $array2);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1. Uzdevums -->
    <h2>Summa: <?= $sum ?></h2>

    <!-- 2. Uzdevums -->
    <h2>Maksimums: <?= $max ?></h2>

    <!-- 3. Uzdevums -->
    <h2>Vidējā: <?= $average ?></h2>

    <!-- 4. Uzdevums -->
    <h2>Minimums: <?= $min ?></h2>

    <!-- 5. Uzdevums -->
    <h2>Pāra: <?= $evenCount ?> ; nepāra: <?= $oddCount ?></h2>

    <!-- 6.uzdevums -->
    <h2>Apgriezts: <?= implode($reverse) ?></h2>

    <!-- 7. Uzdevums -->

    <!-- 8. Uzdevums -->
    <h2>Apvienots:
        <?php 
        foreach ($combined as $apvienots) { 
            echo $apvienots . " ";
        };
        ?>
    </h2>
</body>
</html>