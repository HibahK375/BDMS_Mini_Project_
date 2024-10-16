<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data from POST request
$bloodType = $_POST['bloodType'];
$pinCode = $_POST['pinCode'];
$appointmentDate = $_POST['date'];
$hospital = $_POST['hospital'];

// Insert data into database
$sql = "INSERT INTO appointments (bloodType, pinCode, appointmentDate, hospital)
        VALUES ('$bloodType', '$pinCode', '$appointmentDate', '$hospital')";



if ($conn->query($sql) === TRUE) {
    // Redirect back to the donor's homepage after successful booking
    header("Location: rprofile.php");
    exit(); // Ensure the script stops after the redirect
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>