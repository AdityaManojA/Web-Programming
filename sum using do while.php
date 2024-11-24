<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $sum=0;
    $num=1;
    do{
        $sum+=$num;
        $num++;
    }
    while($num<=100);

    echo "The sum of numbers from 1 to 100 is: ".$sum;
    ?>

</body>
</html>
