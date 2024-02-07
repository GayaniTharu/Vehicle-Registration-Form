<?php
// Establish database connection (same as in save_vehicle.php)
$servername = "localhost";
$username = "root"; // Enter your database username
$password = ""; // Enter your database password
$dbname = "vehicles_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Retrieve vehicles from database
$sql = "SELECT * FROM vehicle";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>
            <tr>
                <th>Vehicle ID</th>
                <th>Vehicle Name</th>
                <th>Vehicle Color</th>
                <th>Vehicle Number</th>
                <th>Owner Name</th>
                <th>Owner Contact</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["vehicle_id"]."</td>
                <td>".$row["vehicle_name"]."</td>
                <td>".$row["vehicle_color"]."</td>
                <td>".$row["vehicle_number"]."</td>
                <td>".$row["owner_name"]."</td>
                <td>".$row["owner_contact"]."</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
