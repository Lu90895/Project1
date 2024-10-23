<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $product = htmlspecialchars(trim($_POST['product']));
    $quantity = (int)$_POST['quantity'];

    // Calculate total price
    $prices = [
        "Blooming beauty" => 79.99,
        "Happy Fall" => 79.99,
        "Majestic Meadow" => 69.99,
        "Roses for her" => 89.99,
        "Autumn Splendor" => 59.99,
        "Autumn Bouquet" => 59.99,
        "Mix Bouquet" => 79.99,
        "Bunch of Daffodil" => 49.99,
        "Holiday Greetings" => 59.99,
        "Tulips!" => 79.99,
        "Ghost Bouquet" => 59.99,
        "Mystery Bouquet" => 79.99,
        "Spooky Bouquet" => 79.99
    ];
    $total_price = $prices[$product] * $quantity;

    // Display order confirmation
    echo "<h1>Order Confirmation</h1>";
    echo "<p>Thank you, $name!</p>";
    echo "<p>You ordered $quantity x $product.</p>";
    echo "<p>Total Price: \$$total_price</p>";
} else {
    echo "Invalid request method.";
}
?>
