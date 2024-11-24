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
    $user_valid=1;
    switch($user_valid){
    case 1: 
        echo "Valid User";
        break;
    case 2:
        echo "invalid";
        break;
    default:
        echo "error";
    }
    ?>
</body>
</html>