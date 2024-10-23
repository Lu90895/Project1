<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>
</head>
<body>
<header>
    <h1>Blooming bouquet</h1>
  </header>

  <!-- menu -->
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
    <main>
        <h2>Contact Us</h2>
      <form action="processcontact.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Send Message">
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
