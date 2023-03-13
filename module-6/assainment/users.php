<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
	<div class="container mx-auto">
		<h1 class="text-center text-3xl font-bold mt-8 mb-4">All Users</h1>

		<div class="flex flex-wrap gap-10">
			<?php
				require_once "user.php";

				$users = fopen("users.csv", "r");
				while($user = fgetcsv($users)) {
					showUser($user);
				}
				fclose($users);
			?> 
		</div>
	</div>
</body>
</html>