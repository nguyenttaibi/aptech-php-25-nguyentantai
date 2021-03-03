<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap.css">
</head>
<body>
    <form action="index.php" method="POST" >
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Name" >
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Email">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Password">
        <label for="cfpassword">ConfirmPassword:</label>
        <input type="password" name="cfpassword" id="cfpassword" placeholder="Confirmpassword">
        <label for=" DateOfBirth">Date of birth</label>
        <input type="date" name="DateOfBirth" id="DateOfBirth">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>