<?php
// Database connection
include 'conect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    // Update the user's profile in the database
    $sql = "UPDATE build SET first_name=?, last_name=? WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $first_name, $last_name, $email);

    if ($stmt->execute()) {
        // Profile updated successfully
        echo "<script>alert('Profile updated successfully');</script>";
        echo "<script>window.location.href = 'homepage-builder.php';</script>";
        exit();
    } else {
        // Error updating profile
        echo "<script>alert('Error updating profile');</script>";
        echo "<script>window.location.href = 'login-builder.php';</script>";
        exit();
    }
}

// Close database connection
$conn->close();
?>
