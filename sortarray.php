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
    echo rsort($Person);//rev
    echo ksort($Person);//key , asc
    echo asort($Person);//value,asc
    echo arsort($Person);//value,desc
    echo krsort($Person);//key,desc
    ?>
</body>
</html>