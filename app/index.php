<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = isset($_POST['a']) ? $_POST['a'] : '';
        // This is equivalent to:
        $a = $_POST['a'] ?? '';

        $b = !empty($_POST['b']) ? $_POST['b'] : '';

        // $a = 1; // number
        // $b = '2'; // string
        // $r = 1 + '2';
    ?>
    <form action="./index.php" method="post">
        <input type="text" name="a" value="<?php echo $a; ?>">
        <input type="text" name="b" value="<?php echo $b; ?>">
        <input type="submit" value="Saskaitīt">
    </form>
    <h1>Summa: <?php echo $a + $b; ?></h1>
    <h1>Summa2: <?= $a + $b; ?></h1>
    <h1>Starpība: <?php echo $a - $b; ?></h1>
    <h1>Reizinājums: <?php echo $a * $b; ?></h1>
    <h1>Dalījums: <?php echo $a / $b; 
    
    if ($b == 0) {
        'ar nulli nedalām';
    } else {
        echo $a / $b;
    }
    
    ?></h1>
    <h1>Kāpinājums: <?php echo $a ** $b; ?></h1>
    <h1>Modulis: <?php echo $a % $b; ?></h1>
    <h1>3 == '3' <?php echo 3 == 3 ? 'Vienādi' : 'Dažādi'; ?></h1>
    <h1>3 === '3' <?php echo 3 === '3' ? 'Vienādi' : 'Dažādi'; ?></h1>
    <h1>3 != '3' <?php echo 3 != 3 ? 'Dažādi' : 'Vienādi'; ?></h1>
    <h1>3 !== '3' <?php echo 3 !== '3' ? 'Dažādi' : 'Vienādi'; ?></h1>

    <?php for ($i=0; $i<10; $i++) { ?>
        <h5> <?= $i ?>. virsraksts</h5>
    <?php } ?>

    <?php 
    
    for ($i=0; $i<10; $i++) {
        echo '<h5>'.$i.'. virsraksts</h5>';
    } 
    
    ?>

</body>
</html>