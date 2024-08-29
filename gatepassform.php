<?php
$servername = "localhost";
$username = "root";  // Replace with your MySQL username
$password = "admin";  // Replace with your MySQL password
$dbname = "student_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$student_name = "Reeta A V";  // Replace this with dynamic data if needed
$from_time = $_POST['fromtime'];
$to_time = $_POST['totime'];
$contact = $_POST['contact'];
$reason = $_POST['reason'];

$sql = "INSERT INTO gatepass_requests (student_name, from_time, to_time, contact, reason)
VALUES ('$student_name', '$from_time', '$to_time', '$contact', '$reason')";

if ($conn->query($sql) === TRUE) {
    echo "Gatepass request submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
