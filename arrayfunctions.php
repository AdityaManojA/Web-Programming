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
    $array1=[1,2,3];
    $array2=[4,5,6];
    $array3=array_merge($array1,$array2);
    array_push($array3,7,8,9);
    foreach($array3 as $value){
        echo "Value is {$value}";
    }
    ?>
</body>
</html>