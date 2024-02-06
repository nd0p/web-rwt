<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="register.css">
    <title>Registration Page</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/LOGO TAMSIS.png">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
        <p>already have an account? <a href="../login/login.php">Login</a></p>
    </div>
</body>
</html>