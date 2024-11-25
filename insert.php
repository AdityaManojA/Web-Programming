<?php 
$servername= "localhost";
$username= "user";
$password= " ";
$dbname= "db1";
//connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
    die("". mysqli_connect_error());
}
else {
    echo "Connected successfully";
}
//main function
if(isset($_POST["submit"]){
    $textfield= $_POST["textfield"];
}

$sql="insert into table(text_field) values('$textfield')";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)> 0){
    while(mysqli_fetch_array($result)){
        echo "<tr><td>". $row["text_field"]."</td></tr>";
    }

mysqli_close($conn);
?>