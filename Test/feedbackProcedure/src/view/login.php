<html>
    <head>
        <title>
            login page
        </title>
    </head>
    <body>
        <form>
            Username : <input type="text" name="usn" id="usn"><br>
            Password : <input type="password" name="password" id="password">

        </form>
    </body>


</html>



























<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
<div>
    <h1>Login</h1>
    <form action="../controller/LoginController.php" method="post">
        Username : <input type="text" name="USN" id="USN" required><br><br>
        Password : <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Login"><br/><br>
        <a href="signUp.php">SignUp</a><br/>
    </form>
</div>
</body>
</html>