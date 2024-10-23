<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Here you could send an email or save to a database
    echo "<h1>Message Sent!</h1>";
    echo "<p>Thank you, $name! Your message has been received.</p>";
} else {
    echo "Invalid request method.";
}
?>
