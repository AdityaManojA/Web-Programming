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
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
        $strInput = $_POST["stringinput"];       
        $revStrInput = strrev($strInput);
        if ($revStrInput == $strInput) {
            echo "<p>The string '<strong>$strInput</strong>' is a palindrome.</p>";
        } 
        else 
        {
            echo "<p>The string '<strong>$strInput</strong>' is not a palindrome.</p>";
        }
    }
    ?>
</body>
</html>