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
    echo " error".mysqli_error($mysqli);
}
$sql1="Select username from users";
$result=mysqli_query($mysqli,$sql1);
if(mysqli_num_rows($result)> 0){
    while($row=mysqli_fetch_assoc($result)){
        echo "user: ".$row["username"]."<br>";
    }
}
else echo"No results found";
?>