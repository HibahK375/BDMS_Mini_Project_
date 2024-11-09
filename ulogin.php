<?php
session_start();  // Start the session

// Check if form is submitted
if (isset($_POST['rlogin'])) {
    
    require_once 'file/connection.php';

    $rname = $_POST['rname'];
    $rpassword = $_POST['rpassword'];

    // Query to fetch user data
    $query = "SELECT * FROM receivers WHERE rname='$rname' AND rpassword='$rpassword'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        // Fetch user data
        $user = mysqli_fetch_assoc($result);

        // Set session variables
        $_SESSION['rid'] = $user['id'];  // Store receiver ID in session
        $_SESSION['rname'] = $user['rname'];  // Store username in session

        // Redirect to the user page
        header("location: Userpage.php");
        exit();
    } else {
        // If login fails
        $_SESSION['error'] = "Invalid Username or Password!";
        header("location: ulogin.php");  // Redirect back to login page with error
        exit();
    }
}
?>
