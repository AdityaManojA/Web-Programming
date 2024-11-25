<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Armstrong number</h1>
    <form method = "POST" action="">
        <label for="armstrong">Enter number: </label>
        <input type="number" name="armstrong" id="armstrong" required>
        <br>
        <br>
        <input type="submit" value="check armstrong">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $armstrong_num = $_POST['armstrong'];
        $temp = $armstrong_num;
        $sum = 0;
        $numcount=strlen($armstrong_num);

        while ($temp>0){
            $digit=$temp%10;
            $sum += pow($digit,$numcount);
            $temp = (int)$temp/10;
        }
        if ($sum == $armstrong_num){
            echo "<p>The number $armstrong_num is an Armstrong number.</p>";
        } else {
            echo "<p>The number $armstrong_num is not an Armstrong number.</p>";
        }
    }
    ?>
</body>
</html>