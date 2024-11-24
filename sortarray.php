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
    $Person=array(
        array("Aditya",21),
        array("Alita",21),
        array("Melvin",21),
    );
    echo sort($Person);
    echo rsort($Person);
    echo ksort($Person);
    echo asort($Person);
    echo sort($Person);
    echo sort($Person);
    ?>
</body>
</html>