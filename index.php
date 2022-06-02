<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Regitrement form</title>
</head>
<h1>Bloob Donation Camp</h1>
<body bgcolor="FBB917">
	<div><h2>Registration Forms</h2></div>
	<form action="connect.php" method="POST">
		<label for="name">Name:</label><br>
		<input type="text" name="name" id="name" required><br>

		<label for="email">Email:</label><br>
		<input type="email" name="email" id="email" required><br>

		<label for="phone">Phone:</label><br>
		<input type="text" name="phone" id="phone" required><br>
		
		<label for="bgroup">Blood Group:</label><br>
		<input type="text" name="bgroup" id="bgroup" required><br>

		<input type="submit" name="submit" id="submit">
	</form>

</body>
</html>