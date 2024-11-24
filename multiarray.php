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

    echo $Person[0][0];//Aditya
    echo $Person[1][1];//21
    ?>
</body>
</html>