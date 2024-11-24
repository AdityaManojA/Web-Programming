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
    while ($user_valid){
        $user_id=$user_valid;
        echo "welcome user %s" . $user_valid;
        if ($user_valid!= 1){
            break;
    }
    }   
    ?>
</body>
</html>