<?php

$masivs = [
    'a',
    'bfwefwfe',
    'c',
    'd',
    4,
    ['masiivs', 'masiivaa'],
];

$pozicija = [
    ['o', 'x', 'o', 'o', 'x', 'o'],
    ['o', 'o', 'o', 'o', 'o', 'o'],
    ['x', 'x', 'x', 'x', 'x', 'x'],
    ['o', 'x', 'o', 'o', 'x', 'o'],
    ['o', 'o', 'o', 'o', 'o', 'o'],
    ['x', 'x', 'x', 'x', 'x', 'x'],
    ['o', 'x', 'o', 'o', 'x', 'o'],
    ['o', 'o', 'o', 'o', 'o', 'o'],
    ['x', 'x', 'x', 'x', 'x', 'x'],
]

// $masivs = 'aasdasfegr';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= var_dump($masivs) ?>
    <pre><?= $masivs[0]; ?></pre>
    <pre><?= $masivs[3]; ?></pre>
    <pre><?= $masivs[2]; ?></pre>
    <pre><?= $masivs[1][3]; ?></pre>
    <pre><?= $masivs[5][0][0]; ?></pre>
    <pre><?= $masivs; ?></pre>


    <!------------------------------ Long way ---------------------------->
    <!-- <table border='1'>
        <tr>
            <td><?= $pozicija[0][0]; ?></td>
            <td><?= $pozicija[0][1]; ?></td>
            <td><?= $pozicija[0][2]; ?></td>
        </tr>
        <tr>
            <td><?= $pozicija[1][0]; ?></td>
            <td><?= $pozicija[1][1]; ?></td>
            <td><?= $pozicija[1][2]; ?></td>
        </tr>
        <tr>
            <td><?= $pozicija[2][0]; ?></td>
            <td><?= $pozicija[2][1]; ?></td>
            <td><?= $pozicija[2][2]; ?></td>
        </tr>
    </table> -->



    <!---------------------------- Short way ----------------------------->

    <!-- <table border="1">

        <?php for ($i = 0; $i < 3; $i++) { ?>
        <tr>
            <?php for ($j = 0; $j < 3; $j++) { ?>
            <td> <?= $pozicija[$i][$j] ?></td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table> -->




    <!---------------------------- another way ----------------------------->


    <table border="1">

        <?php foreach ($pozicija as $rindina) { ?>
            <tr>
                <?php foreach ($rindina as $ailite) { ?>
                    <td><?= $ailite ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

</body>

</html>