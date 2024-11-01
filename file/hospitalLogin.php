<?php
session_start();
require 'connection.php';

if (isset($_POST['hlogin'])) {
    // Retrieve input from the form
    $hid = $_POST['hid'];
    $hpassword = $_POST['hpassword'];

    // Query to check the provided hospital ID and password
    $sql = "SELECT * FROM hospitals WHERE hid='$hid'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) == 0) {
        // If no matching ID, redirect with error
        $error = "Wrong ID or password. Please try again.";
        header("location:../login.php?error=" . urlencode($error));
    } else {
        $row = mysqli_fetch_assoc($result);

        // If passwords are hashed, use password_verify here
        if ($hpassword === $row['hpassword']) { // Replace with password_verify if hashed
            // Successful login, set session variables
            $_SESSION['hemail'] = $row['hemail'];
            $_SESSION['hname'] = $row['hname'];
            $_SESSION['hid'] = $row['hid'];
            
            // Redirect to hospital page with a success message
            $msg = $_SESSION['hname'] . ' has logged in.';
            header("location:../hospitalpage.html?msg=" . urlencode($msg));
        } else {
            // Incorrect password, redirect with error
            $error = "Wrong ID or password. Please try again.";
            header("location:../login.php?error=" . urlencode($error));
        }
    }
}
?>
