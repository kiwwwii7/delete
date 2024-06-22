<?php
    $taskNumber = $_GET['task'] ?? 0;

    if (!is_numeric($taskNumber)) {
        $taskNumber = 0;
    } else {
        $taskNumber = intval($taskNumber);
    }
    
    $body = "practice/task.$taskNumber.php";

    if (!file_exists($body)) {
        $body = "practice/task.0.php";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <div><?php include $body; ?></div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>