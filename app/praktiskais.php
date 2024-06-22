<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $darbiba = $_POST['darbiba'];

        if ($darbiba == 'plus') {
            $rezultats = $a + $b + $c;
        } elseif ($darbiba == 'minus') {
            $rezultats = $a - $b - $c;
        } elseif ($darbiba == 'reiz') {
            $rezultats = $a * $b * $c;
        } elseif ($darbiba == 'dalīt') {
            $rezultats = $a / $b / $c;
        } else {
            $rezultats = 'Error';
        }
    ?>
    <form action="./praktiskais.php" method="post">
        <input type="text" name="a" value="<?php echo $a; ?>">
        <input type="text" name="b" value="<?php echo $b; ?>">
        <input type="text" name="c" value="<?php echo $c; ?>">
        <select name="darbiba">
            <option value="plus" <?php if ($darbiba == 'plus') echo 'selected'; ?>>Plus</option>
            <option value="minus" <?php if ($darbiba == 'minus') echo 'selected'; ?>>Minus</option>
            <option value="reiz" <?php if ($darbiba == 'reiz') echo 'selected'; ?>>Reiz</option>
            <option value="dalīt" <?php if ($darbiba == 'dalīt') echo 'selected'; ?>>Dalīts</option>
        </select>
        <input type="submit" value="Rezultāts">
    </form>
    <h1>Summa: <?php echo $rezultats; ?></h1>
</body>
</html>