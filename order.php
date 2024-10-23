<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Order Your bouquet</title>
</head>
<body>
    <header>
        <h1>Order Your bouquet</h1>
        <nav>
        <div class="menuitem">
      <a href="home.php">
      <span class="menutext">Home</span>
      </a>
  </div>

  <div class="menuitem">
      <a href="bouquets.php">
      <span class="menutext">Our Bouquets</span>
      </a>
  </div>

  <div class="menuitem">
      <a href="halloween.php">
      <span class="menutext">Halloween</span>
      </a>
  </div>

  <div class="menuitem">
      <a href="occasion.php">  
      <span class="menutext">Occasions</span>
      </a>
  </div>

  <div class="menuitem">
      <a href="bestselling.php">
      <span class="menutext">Best-selling</span>
      </a>
  </div>

  <div class="menuitem">
      <a href="order.php">
      <span class="menutext">Order Now</span>
      </a>
  </div>
  </nav>
    </header>
    <main>
        <form action="processorder.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="product">Select Bouquet:</label>
            <select id="product" name="product" required>
                <option value="Blooming beauty">Blooming beauty - $79.99</option>
                <option value="Happy Fall">Happy Fall - $79.99</option>
                <option value="Majestic Meadow">Majestic Meadow - $69.99</option>
                <option value="Roses for her">Roses for her - $89.99</option>
                <option value="Autumn Splendor">Autumn Splendor - $59.99</option>
                <option value="Autumn Bouquet">Autumn Bouquet - $59.99</option>
                <option value="Mix Bouquet">Mix Bouquet - $79.99</option>
                <option value="Bunch of Daffodil">Bunch of Daffodil - $49.99</option>
                <option value="Holiday Greetings">Holiday Greetings - $59.99</option>
                <option value="Tulips!">Tulips! - $79.99</option>
                <option value="Ghost Bouquet">Ghost Bouquet - $59.99</option>
                <option value="Mystery Bouquet">Mystery Bouquet- $79.99</option>
                <option value="Spooky Bouquet">Spooky Bouquet - $79.99</option>
            </select>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <button type="submit">Place Order</button>
        </form>
    </main>
    <footer>
    <h2>Blooming bouquet</h2>
 <div class="menuitem">
      <a href="contact.php">
      <span class="menutext">Contact us</span>
      </a>
  </div>

  <div class="menuitem">
      <a href="about.php">
      <span class="menutext">About us</span>
      </a>
  </div>
      <p>&copy; Blooming bouquet,Inc.<br />
      </p>
    </footer>
</body>
</html>
