<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>
<body>
    <h2>Palindrome Checker</h2>
    <!-- HTML Form to input a string -->
    <form method="post" action="">
        <label for="stringInput">Enter a string: </label>
        <input type="text" name="stringInput" id="stringInput" required>
        <input type="submit" value="Check Palindrome">
    </form>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input string from the form
        $inputString = $_POST['stringInput'];

        // Remove any spaces and convert the string to lowercase for case-insensitive comparison
        $processedString = strtolower(str_replace(' ', '', $inputString));

        // Check if the string is a palindrome
        if ($processedString == strrev($processedString)) {
            echo "<p>The string '$inputString' is a palindrome.</p>";
        } else {
            echo "<p>The string '$inputString' is not a palindrome.</p>";
        }
    }
    ?>

</body>
</html>
