<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <form action="" method="post" class="bg-gray-300 p-8 rounded-lg shadow-md w-full max-w-lg">
        <div class="mb-4">
            <input type="text" name="text1" placeholder="Text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-2">
            <input type="text" name="text2" placeholder="Text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <input type="number" name="int" id="int" placeholder="Int" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-2">
            <div class="flex items-center space-x-4">
                <label for="yes" class="inline-flex items-center">
                    <input type="radio" name="vote" id="yes" value="Yes" class="form-radio text-blue-500">
                    <span class="ml-2">Yes</span>
                </label>
                <label for="no" class="inline-flex items-center">
                    <input type="radio" name="vote" id="no" value="No" class="form-radio text-blue-500">
                    <span class="ml-2">No</span>
                </label>
            </div>
        </div>
        <div class="mb-4">
            <input type="number" name="float" id="float" placeholder="Float" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <select name="array[]" id="array" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" multiple>
                <option value="opt1">Option 1</option>
                <option value="opt2">Option 2</option>
                <option value="opt3">Option 3</option>
                <option value="opt4">Option 4</option>
                <option value="opt5">Option 5</option>
            </select>
        </div>
        <div class="flex justify-center">
            <input type="submit" value="Submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
        </div>
    </form>
</body>

</html>

<?php
    $data = [
        'text1' => (!empty($_POST['text1']) ? $_POST['text1'] : ""),
        'text2' => (!empty($_POST['text2']) ? $_POST['text2'] : ""),
        'int' => (!empty($_POST['int']) ? $_POST['int'] : ""),
        'float' => (!empty($_POST['float']) ? $_POST['float'] : ""),
        'array' => (!empty($_POST['array']) ? $_POST['array'] : ""),
    ];

    echo '';
?>