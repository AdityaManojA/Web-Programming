<?php
$cookie_name='user';
$cookie_value= 'John Smith';
setcookie($cookie_name,$cookie_value,time()+ (86400*30),"/");//30 days cookie storage
?>

<html>
    <body>
        <?php
        if(isset($_COOKIE[$cookie_name])){
            echo "Welcome ". $_COOKIE[$cookie_name]. "!<br>";
        }
        else {
            echo "Cookie not found";
        }
        ?>
    </body>
</html>