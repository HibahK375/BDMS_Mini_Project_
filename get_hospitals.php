<?php
// Database connection
$servername = "localhost"; // Your server
$username = "root"; // Your username
$password = ""; // Your password
$dbname = "bloodbank"; // Your database

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get pin code from the POST request
$pinCode = $_POST['pinCode'];

// Query to find hospitals matching the pinCode
$sql = "SELECT hname FROM hospitals WHERE hcity = '$pinCode'";
$result = $conn->query($sql);

// Generate the options for the select dropdown
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['hname'] . "'>" . $row['hname'] . "</option>";
    }
} else {
    echo "<option value=''>No hospitals found</option>";
}

$conn->close();
?>