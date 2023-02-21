<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full flex items-center">
    <div class="w-full max-w-md mx-auto">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="./submit.php">
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="password-length">
                Password Length
            </label>

            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password-length" type="number" value="12" min="6" max="64">
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Generate Password
            </button>
        </div>
    </form>
    </div>

</body>
</html>