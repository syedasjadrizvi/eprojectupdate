<?php
session_start();
include('db.php');

if (!isset($_SESSION['user_id'])) {
    die("Error: User is not logged in.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['doctor_id'], $_POST['appointment_date'])) {
        $patient_id = $_SESSION['user_id'];
        $doctor_id = $_POST['doctor_id'];
        $appointment_date = $_POST['appointment_date'];

        // Use a prepared statement
        $stmt = $conn->prepare("INSERT INTO appointments (patient_id, doctor_id, appointment_date) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $patient_id, $doctor_id, $appointment_date);

        if ($stmt->execute()) {
            echo "Appointment booked successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        die("Error: Doctor or appointment date is not set.");
    }
}

$conn->close();
?>
