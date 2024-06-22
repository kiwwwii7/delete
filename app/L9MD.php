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
        <h1 class="text-xl">Personal Information</h1>
        <p class="text-gray-400 mb-6">Use a permanent address where you can receive mail</p>
        <form action="" method="POST">
            <div class="md:flex gap-6 mb-6">
                <div class="flex-1">
                    <label for="name">First name</label>
                    <input type="text" name="name" class="mt-1 w-full border border-gray-300 rounded-md p-2" />
                </div>
                <div class="flex-1">
                    <label for="surname">Last name</label>
                    <input type="text" name="surname" class="mt-1 w-full border border-gray-300 rounded-md p-2" />
                </div>
            </div>
            <div class="flex flex-col mb-6">
                <label for="email">Email address</label>
                <input type="email" name="email" class="mt-1 md:w-2/3 border border-gray-300 rounded-md p-2">
            </div>
            <div class="flex flex-col mb-6">
                <label for="country">Country</label>
                <select name="country" id="country" class="mt-1 w-1/2 border border-gray-300 rounded-md p-2">
                    <option value="us">United States</option>
                    <option value="ca">Canada</option>
                    <option value="lv">Latvia</option>
                    <option value="uk">United Kingdom</option>
                    <option value="gr">Germany</option>
                    <option value="fr">France</option>
                    <option value="it">Italy</option>
                    <option value="jp">Japan</option>
                    <option value="cn">China</option>
                    <option value="in">India</option>
                </select>
            </div>
            <div class="mb-6">
                <label for="street">Street address</label>
                <input type="text" name="street" class="mt-1 w-full border border-gray-300 rounded-md p-2">
            </div>
            <div class="md:flex gap-6 mb-6">
                <div class="flex flex-col flex-1">
                    <label for="city">City</label>
                    <input type="text" name="city" class="mt-1 w-full border border-gray-300 rounded-md p-2 mb-6">
                </div>
                <div class="flex flex-col flex-1">
                    <label for="state">State / Province</label>
                    <input type="text" name="state" class="mt-1 w-full border border-gray-300 rounded-md p-2 mb-6">
                </div>
                <div class="flex flex-col flex-1">
                    <label for="zip">ZIP / Postal code</label>
                    <input type="text" name="zip" class="mt-1 w-full border border-gray-300 rounded-md p-2 mb-6">
                </div>
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Submit</button>
        </form>
    </section>

    <?php

        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $country = $_POST['country'];
            $street = $_POST['street'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];

            if (!empty($name) & !empty($surname) & !empty($email) & !empty($country) & !empty($street) & !empty($city) & !empty($state) & !empty($zip)) {
                echo "<section class='mx-auto p-8 rounded-lg shadow mt-8'>";
                echo "<h2 class='text-xl'>User information</h2>";
                echo "<p>First Name: " .$name."</p>";
                echo "<p>Surname: " .$surname."</p>";
                echo "<p>Email Address: " .$email."</p>";
                echo "<p>Country: " .$country."</p>";
                echo "<p>City: " .$city."</p>";
                echo "<p>State: " .$state."</p>";
                echo "<p>ZIP: " .$zip."</p>";
                echo "</section>";
            } else {
                echo "You must fill in all fields";
            }
        }
        
    ?>

</body>

</html>