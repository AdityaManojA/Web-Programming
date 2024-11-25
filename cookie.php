<?php
$cookie_name='user';
$cookie_value= 'John Smith';
setcookie($cookie_name,$cookie_value,time()+ (86400*30),"/");//30 days cookie storage
?>