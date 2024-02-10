<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link rel="icon" type="image/x-icon" href="assets/images/LOGO TAMSIS.png">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about/about.php">About</a></li>
                <li><a href="contact/contact.php">Contact</a></li>
                <li><a href="otp/otp.php">otp</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login/login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Welcome to our website!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna a ullamcorper elementum, velit velit rhoncus nisl, ut interdum nisi nisi vel nisi. Sed velit nisi, laoreet a consectetur a, vestibulum ac nunc. Sed auctor, magna a ullamcorper elementum, velit velit rhoncus nisl, ut interdum nisi nisi vel nisi. Sed velit nisi, laoreet a consectetur a, vestibulum ac nunc. ruwet</p>
        <button id="load-more-btn" class="btn btn-primary">Load More</button>
    </main>
    <script src="scripts.js"></script>
</body>
</html>