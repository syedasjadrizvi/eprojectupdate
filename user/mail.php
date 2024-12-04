<?php
// Include the database connection
include('doctors_db'); // Adjust the path as needed

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $subscribed = isset($_POST['news']) ? 1 : 0; // Checkbox value

    // Insert data into the database
    $sql = "INSERT INTO contact_form (name, email, phone, subject, message, subscribed) 
            VALUES ('$name', '$email', '$phone', '$subject', '$message', $subscribed)";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Your message has been sent successfully!"); window.location.href="../index.php";</script>';
    } else {
        echo '<script>alert("Error: ' . $conn->error . '"); window.location.href="../index.php";</script>';
    }

    // Close the database connection
    $conn->close();
} else {
    echo '<script>alert("Invalid request method!"); window.location.href="../index.php";</script>';
}
?>
