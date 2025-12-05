<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact</h1>
    <ul>
        <a href="index.php"><li>Home</li></a>
        <a href="about.php"><li>About</li></a>
        <a href="contact.php"><li>Contact</li></a>
    </ul>
    <form action="contact-sent.php" method="post">
        <label>Enter your name: <label>
        <input type="text" id="name" name="name">
        <label>Enter your email: <label>
        <input type="text" id="email" name="email">
        <label>Enter feedback: <label>
        <input type="text" id="feedback" name="feedback">
        <input type="submit">
    </form>
</body>
</html>