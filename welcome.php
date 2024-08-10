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
<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $fullname=$_POST['fullname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    echo "<p>fullname: $fullname</p>";
    echo "<p>age: $age</p>";
    echo "<p>email: $email</p>";
    echo "<p>phone: $phone</p>";
    if ($age<15)
    {
        echo "<p>Message: U r young keep learning</p>";
    }
    elseif ($age<25)
    {
        echo "<p>Message: U r at great age </p>";
    }
    else 
    {
        echo "<p>Message: exprience counts</p>";
    }

    
}
?>
</body>
</html>