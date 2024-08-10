<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<h1>Welcome to php</h1>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="calculation.php">calculation</a></li>
    <li><a href="registration.php">Registration</a></li>
</ul>
<form action="welcome.php" method="post">
    <label for="fullname">Full Name:</label>
<input type="text" name="fullname" id="fullname" required><br>
<label for="age">Age:</label>
<input type="number" name="age" id="age" required><br>
<label for="email">Email:</label>
<input type="email" name="email" id="email" required><br>
<label for="phone">Phone:</label>
<input type="tel" name="phone" id="phone" required><br>
<input type="submit" value="Register">

</body>
</html>