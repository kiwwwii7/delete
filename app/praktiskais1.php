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
        $darbiba2 = $_POST['darbiba2'];

        if ($darbiba == 'plus') {
            $rezultats = $a + $b;
        } elseif ($darbiba == 'minus') {
            $rezultats = $a - $b;
        } elseif ($darbiba == 'reiz') {
            $rezultats = $a * $b;
        } elseif ($darbiba == 'dalīt') {
            $rezultats = $a / $b;
        } else {
            $rezultats = 'Error';
        }

        if ($darbiba2 == 'plus') {
            $rezultats2 = $rezultats + $c;
        } elseif ($darbiba2 == 'minus') {
            $rezultats2 = $rezultats - $c;
        } elseif ($darbiba2 == 'reiz') {
            $rezultats2 = $rezultats * $c;
        } elseif ($darbiba2 == 'dalīt') {
            $rezultats2 = $rezultats / $c;
        } else {
            $rezultats2 = 'Error';
        }
    ?>
    <form action="./praktiskais1.php" method="post">
        <input type="text" name="a" value="<?php echo $a; ?>">
        <select name="darbiba">
            <option value="plus" <?php if ($darbiba == 'plus') echo 'selected'; ?>>Plus</option>
            <option value="minus" <?php if ($darbiba == 'minus') echo 'selected'; ?>>Minus</option>
            <option value="reiz" <?php if ($darbiba == 'reiz') echo 'selected'; ?>>Reiz</option>
            <option value="dalīt" <?php if ($darbiba == 'dalīt') echo 'selected'; ?>>Dalīts</option>
        </select>
        <input type="text" name="b" value="<?php echo $b; ?>">
        <select name="darbiba2">
            <option value="plus" <?php if ($darbiba2 == 'plus') echo 'selected'; ?>>Plus</option>
            <option value="minus" <?php if ($darbiba2 == 'minus') echo 'selected'; ?>>Minus</option>
            <option value="reiz" <?php if ($darbiba2 == 'reiz') echo 'selected'; ?>>Reiz</option>
            <option value="dalīt" <?php if ($darbiba2 == 'dalīt') echo 'selected'; ?>>Dalīts</option>
        </select>
        <input type="text" name="c" value="<?php echo $c; ?>">
        </select>
        <input type="submit" value="Rezultāts">
    </form>
    <h1>Summa: <?php echo $rezultats ? $rezultats2 : ''; ?></h1>
</body>
</html>