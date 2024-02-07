<?php
// Establish database connection
$servername = "localhost";
$username = "root"; // Enter your database username
$password = ""; // Enter your database password
$dbname = "vehicles_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$vehicle_id = $_POST['vehicle_id'];
$vehicle_name = $_POST['vehicle_name'];
$vehicle_color = $_POST['vehicle_color'];
$vehicle_number = $_POST['vehicle_number'];
$owner_name = $_POST['owner_name'];
$owner_contact = $_POST['owner_contact'];

// Insert data into database
$sql = "INSERT INTO vehicle (vehicle_id, vehicle_name, vehicle_color, vehicle_number, owner_name, owner_contact) 
        VALUES ('$vehicle_id', '$vehicle_name', '$vehicle_color', '$vehicle_number', '$owner_name', '$owner_contact')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
