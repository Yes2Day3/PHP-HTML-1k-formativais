<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thank you for your submition!</h1>
    <a href="contact.php">Contact</a>
    <?php
    echo "<p>Name: " . htmlspecialchars($_POST["name"]) . "</p>";
    echo "<p>Email: " . htmlspecialchars($_POST["email"]) . "</p>";
    echo "<p>Feedback: " . htmlspecialchars($_POST["feedback"]) . "</p>";
    ?>
</body>
</html>