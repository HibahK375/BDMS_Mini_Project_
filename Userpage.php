<?php
session_start();
include 'connection.php'; // Include the connection file

// Check if the user is logged in
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// Get user info
$user_id = $_SESSION['user_id'];
$role = $_SESSION['role'];
$username = $_SESSION['username'];

// Greeting based on role
$greeting = ($role === 'donor') ? "Welcome, Donor $username!" : "Welcome, Receiver $username!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        /* Embedded CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 1em;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 200px;
            background-color: #333;
            color: white;
            padding-top: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 15px;
            text-align: center;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
        }

        .sidebar ul li a:hover {
            background-color: #555;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h2><?php echo $greeting; ?></h2>
    </header>
    <div class="container">
        <nav class="sidebar">
            <ul>
                <?php if ($role === 'donor'): ?>
                    <li><a href="donor/register_as_donor.php">Register as Donor</a></li>
                    <li><a href="donor/book_appointment.php">Book Appointment to Donate</a></li>
                    <li><a href="donor/view_appointment_status.php">View Appointment Status</a></li>
                <?php elseif ($role === 'receiver'): ?>
                    <li><a href="receiver/request_blood.php">Request Blood in Nearby Hospitals</a></li>
                    <li><a href="receiver/search_nearby_donors.php">Search for Nearby Donors</a></li>
                    <li><a href="receiver/view_request_status.php">View Request Status</a></li>
                <?php endif; ?>
            </ul>
        </nav>

        <main class="content">
            <h3>Dashboard</h3>
            <p>Select an option from the side panel to get started.</p>
        </main>
    </div>
</body>
</html>
