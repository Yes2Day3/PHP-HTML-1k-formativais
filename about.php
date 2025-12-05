<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>About</h1>";
    echo "<ul>
    <a href=" . "index.html" . "><li>Home</li></a>
    <a href=" . "about.php" . "><li>About</li></a>
    <a href=" . "contact.php" . "><li>Contact</li></a>
    </ul>";
    $indexedArray = ["Lorem ipsum dolor sit amet.", 
    "Lorem ipsum dolor sit amet, consectetur adipisicing.",
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iusto."];
    foreach($indexedArray as $text){
        echo "<p>$text</p>";
    };
    ?>
</body>
</html>