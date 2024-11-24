<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>
<body>
    <h2>Palindrome Checker</h2>

    <form method ='post' action="">
        <label for="stringinput"> Enter a string </label>  
        <input type="text" name="stringinput" id ="stringinput" required>
        <input type="submit" value="Checkpal">
    </form>

    <?php
    if ($S_SERVER['REQEST_METHOD']=='POST'){
        $STRINP=$_POST["stringinput"];
        $RSTRINP=strrev($STRINP);
        if ($RSTRINP==$STRINP){
            echo "The string is a palindrome.";
        }
        else {  
            echo "The string is not a palindrome.";
        }
    }
    ?>

</body>
</html>
