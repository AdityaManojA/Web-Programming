<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <?php
    $txt="Hello World";
    $check="World Hello";
    echo preg_match($txt,$check); 
    ?>
</body>
</html>