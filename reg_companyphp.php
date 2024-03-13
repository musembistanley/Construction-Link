<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<?php
// Database connection
include 'conect.php';

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = $_POST['company_name'];
    $company_email = $_POST['company_email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Prepare and execute SQL statement
    $stmt = $conn->prepare("INSERT INTO construct (company_name, company_email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $company_name, $company_email, $password);
    if ($stmt->execute()) {
        // Registration successful
        echo '<script>alert("Registration successful! Redirecting to login page...");</script>';
        echo '<script>window.location.href = "login-company.php";</script>';
        exit(); // Terminate script execution to ensure redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
</body>
</html>
