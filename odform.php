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
$from_date = $_POST['fromdate'];
$to_date = $_POST['todate'];
$contact = $_POST['contact'];
$reason = $_POST['reason'];

$sql = "INSERT INTO od_requests (student_name, from_date, to_date, contact, reason)
VALUES ('$student_name', '$from_date', '$to_date', '$contact', '$reason')";

if ($conn->query($sql) === TRUE) {
    echo "On-duty request submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
