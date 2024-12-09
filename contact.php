<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Our Shoe Store</title>
    <link rel="stylesheet" href="home_page_style.css"> <!-- Link to common CSS file -->
</head>
<body>

    <header>
        <h1>Contact Our Shoe Store</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="homepage-main">
        <h2>Get in Touch</h2>
        <p>If you have any questions or concerns, feel free to reach out to us. We’re here to help!</p>
        <p><strong>Email:</strong> support@shoestore.com</p>
        <p><strong>Phone:</strong> +1 234 567 890</p>
        <p><strong>Address:</strong> 123 Shoe St., Footwear City, USA</p>
        
        <h3>Contact Form</h3>
        <form action="submit_contact.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="message">Your Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
            
            <button type="submit">Submit</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Our Shoe Store. All rights reserved.</p>
    </footer>

</body>
</html>
