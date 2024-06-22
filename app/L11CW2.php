<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <section class="mx-auto bg-white p-8 rounded-lg shadow">
        <form action="L11CW2.php" method="POST">
            <div class="gap-6 mb-6">
                <div class="flex-1 flex flex-col">
                    <label for="saraksta_nos">Saraksta Nosaukums</label>
                    <input type="text" name="saraksta_nos" class="mt-1 w-1/3 border border-gray-300 rounded-md p-2" required />
                </div>
                <div class="flex-1 flex flex-col">
                    <label for="kandidatu_sk">Kandidātu skaits</label>
                    <input type="text" name="kandidatu_sk" class="mt-1 w-1/3 border border-gray-300 rounded-md p-2" required />
                </div>
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded mt-6 w-1/3 hover:bg-blue-800">Submit</button>
        </form>
    </section>
    <?php
    echo "-----------------------------------------------------------------------------";
    $kandidatuSkaits = $_POST['kandidatu_sk'];
    $sarakstaNos = $_POST['saraksta_nos'];
    ?>
    <div class="text-xl">Saraksts: <?= $sarakstaNos ?></div>
    <section class="mx-auto bg-white p-8 rounded-lg shadow">
        <form action="L11CW2.php" method="POST">
        <input type="hidden" name="saraksta_nos" value="<?= $sarakstaNos ?>">
        <input type="hidden" name="kandidatu_sk" value="<?= $kandidatuSkaits ?>">

        <?php
            for($i = 0; $i < $kandidatuSkaits; $i++) { ?>
                <h2 class="mt-10"><?= $i + 1 ?>. Kandidāta dati</h2>
                <div class="flex-1 flex flex-col">
                    <label for="name">Vārds</label>
                    <input type="text" name="name" class="mt-1 w-1/3 border border-gray-300 rounded-md p-2" required>
                </div> 
                <div class="flex-1 flex flex-col">
                    <label for="surname">Uzvārds</label>
                    <input type="text" name="surname" class="mt-1 w-1/3 border border-gray-300 rounded-md p-2" required>
                </div> 
                <div class="flex-1 flex flex-col">
                    <label for=""></label>
                    <div class="mt-1 flex">
                        <label class="mr-2">
                            <input type="radio" name="vote" value="Par" required > Par
                        </label>
                        <label class="mr-2">
                            <input type="radio" name="vote" value="Pret" required > Pret
                        </label>
                        <label>
                            <input type="radio" name="vote" value="Atturos" required > Atturos
                        </label>
                    </div>
                </div>
            <?php } ?>
            <input type="submit" value="Submit" class="bg-blue-500 text-white p-2 rounded mt-6 w-1/3 hover:bg-blue-800">
        </form>
    </section>

    <div>
        <?php

        $dati = [
            'name' => ['name'],
            'surname' => 'surname',
            'vote' => 'vote',
        ]

        ?>

        <pre><?= var_dump($dati) ?></pre>


    </div>
</body>

</html>