<?php
$username="user";
$servername="localhost"; 
$password="password";
$dbname="testdb";
$mysqli=mysqli_connect($servername,$username,$password,$dbname);

if(!$mysqli){
    die("connection failed".mysqli_error($mysqli));
}
else {
    echo "Connected successfully";
}

$sql="INSERT INTO users (username, password) VALUES ('John Doe', 'password123')";
if (mysqli_query($mysqli,$sql)){
    echo "table created successfully";
}
else {
    echo "".mysqli_error($mysqli);
}
?>