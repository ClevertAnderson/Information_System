<?php
// Start the session to check for logged-in users
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit;
}

// Simulated shoe data (In a real-world scenario, this might come from a database)
$shoes = [
    [
        'name' => 'Running Shoes',
        'price' => 59.99,
        'description' => 'Comfortable and lightweight running shoes.',
        'image' => 'images/running_shoes.jpg'
    ],
    [
        'name' => 'Sneakers',
        'price' => 49.99,
        'description' => 'Stylish sneakers for everyday wear.',
        'image' => 'images/sneakers.jpg'
    ],
    [
        'name' => 'Boots',
        'price' => 89.99,
        'description' => 'Durable boots for tough conditions.',
        'image' => 'images/boots.jpg'
    ],
    [
        'name' => 'Formal Shoes',
        'price' => 119.99,
        'description' => 'Elegant shoes for formal occasions.',
        'image' => 'images/formal_shoes.jpg'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="dashboard.css"> <!-- External CSS file for styling -->
</head>

<body>

    <header>
        <h1>Welcome to Your Dashboard, <?php echo $_SESSION['username']; ?>!</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li> <!-- Added logout link -->
            </ul>
        </nav>
    </header>

    <main>
        <h2>Your Personalized Shoe Collection</h2>
        <div class="shoe-gallery">
            <?php foreach ($shoes as $shoe): ?>
                <div class="shoe-item">
                    <img src="<?php echo $shoe['image']; ?>" alt="<?php echo $shoe['name']; ?>" class="shoe-image">
                    <h3><?php echo $shoe['name']; ?></h3>
                    <p><?php echo $shoe['description']; ?></p>
                    <p><strong>Price: $<?php echo number_format($shoe['price'], 2); ?></strong></p>
                    <button>Add to Cart</button>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Our Shoe Store. All rights reserved.</p>
    </footer>

</body>

</html>
