<?php
// Database connection settings
$servername = "localhost"; // Host name
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "testdb"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// Create a table if it doesn't exist
$tableQuery = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    age INT
)";
if ($conn->query($tableQuery) === TRUE) {
    echo "Table 'users' is ready!<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// **INSERT DATA**
$name = "John Doe";
$email = "johndoe@example.com";
$age = 25;

$insertQuery = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', $age)";
if ($conn->query($insertQuery) === TRUE) {
    echo "New record inserted successfully!<br>";
} else {
    echo "Error inserting record: " . $conn->error;
}

// **UPDATE DATA**
$updateQuery = "UPDATE users SET age = 30 WHERE name = 'John Doe'";
if ($conn->query($updateQuery) === TRUE) {
    echo "Record updated successfully!<br>";
} else {
    echo "Error updating record: " . $conn->error;
}

// **DELETE DATA**
$deleteQuery = "DELETE FROM users WHERE name = 'John Doe'";
if ($conn->query($deleteQuery) === TRUE) {
    echo "Record deleted successfully!<br>";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Fetch and display all records from the table
$result = $conn->query("SELECT * FROM users");
if ($result->num_rows > 0) {
    echo "<h3>Records in 'users' table:</h3>";
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . " - Age: " . $row["age"] . "<br>";
    }
} else {
    echo "No records found!<br>";
}

// Close connection
$conn->close();
?>
