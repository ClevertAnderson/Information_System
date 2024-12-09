<?php
// Start the session to check for logged-in users
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <nav>
            <!-- Check if the user is logged in -->
            <?php if (isset($_SESSION['user_id'])): ?>
                <!-- If logged in, show logout button -->
                <a href="logout.php" class="logout-btn">Logout</a>
            <?php else: ?>
                <!-- If not logged in, show login and signup buttons -->
                <a href="login.php" class="login-btn">Login</a>
                <a href="signup.php" class="signup-btn">Sign Up</a>
            <?php endif; ?>
        </nav>
        <div class="hero">
            <div class="hero-content">
                <h1>Discover the Future with Us</h1>
                <p>Join our platform and explore endless possibilities.</p>
                <a href="#features" class="cta-btn">Learn More</a>
            </div>
            <div class="hero-images">
                <img src="images/coolgrey.jpg" alt="Hero Image 1" class="hero-img">
                <img src="images/costumnike.jpg" alt="Hero Image 2" class="hero-img">
                <img src="images/curry.jpg" alt="Hero Image 3" class="hero-img">
            </div>
        </div>
    </header>

    <section id="features">
        <h2>Our Features</h2>
        <div class="features-container">
            <div class="feature">
                <img src="images/greekfreak.jpg" alt="GreekFreak">
                <h3>Feature One</h3>
                <p>Experience seamless integration and efficiency.</p>
            </div>
            <div class="feature">
                <img src="images/durant.jpg" alt="Durant">
                <h3>Feature Two</h3>
                <p>Discover tools designed for your success.</p>
            </div>
            <div class="feature">
                <img src="images/Jordan4.jpg" alt="Jordan">
                <h3>Feature Three</h3>
                <p>Connect with a global network of professionals.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Website. All rights reserved.</p>
    </footer>
</body>

</html>
