<?php
// Database connection
include 'conect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $company_name = $_POST['company_name'];
    $email = $_POST['email'];

    // Update the construction company's profile in the database
    $sql = "UPDATE construct SET company_name=? WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $company_name, $email);

    if ($stmt->execute()) {
        // Profile updated successfully
        echo "<script>alert('Profile updated successfully');</script>";
        echo "<script>window.location.href = 'dsconst.php';</script>";
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
