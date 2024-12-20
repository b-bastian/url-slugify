<?php

use Bbrugger\MyTest\MyURL;

require_once "vendor/autoload.php";

$url = new MyURL();
echo $url->slugify("https://www.example.org", "Das ist ein langer Text!");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL - Slugify</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>