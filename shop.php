<?php
// Simulated shoe data for the Shop page
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
    <title>Shop - Our Shoe Store</title>
    <link rel="stylesheet" href="home_page_style.css"> <!-- Link to common CSS file -->
</head>
<body>

    <header>
        <h1>Welcome to Our Shoe Store!</h1>
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
        <h2>Shop Our Latest Collection</h2>
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
