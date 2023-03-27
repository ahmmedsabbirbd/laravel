<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-200">
	<div class="max-w-md mx-auto my-8 bg-white p-6 rounded-md shadow-sm">
		<h1 class="text-2xl font-medium mb-4">Registration Form</h1>
		<form action="register.php" method="post">
			<div class="mb-4">
				<label for="first_name" class="block text-gray-700 font-medium mb-2">First Name:</label>
				<input type="text" name="first_name" id="first_name" class="border-gray-400 border-2 p-2 w-full rounded-md" required>
			</div>

			<div class="mb-4">
				<label for="last_name" class="block text-gray-700 font-medium mb-2">Last Name:</label>
				<input type="text" name="last_name" id="last_name" class="border-gray-400 border-2 p-2 w-full rounded-md" required>
			</div>

			<div class="mb-4">
				<label for="email" class="block text-gray-700 font-medium mb-2">Email Address:</label>
				<input type="email" name="email" id="email" class="border-gray-400 border-2 p-2 w-full rounded-md" required>
			</div>

			<div class="mb-4">
				<label for="password" class="block text-gray-700 font-medium mb-2">Password:</label>
				<input type="password" name="password" id="password" class="border-gray-400 border-2 p-2 w-full rounded-md" required>
			</div>

			<div class="mb-4">
				<label for="confirm_password" class="block text-gray-700 font-medium mb-2">Confirm Password:</label>
				<input type="password" name="confirm_password" id="confirm_password" class="border-gray-400 border-2 p-2 w-full rounded-md" required>
			</div>

			<button type="submit" name="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Register</button>
		</form>
    </div>
</body>
</html>