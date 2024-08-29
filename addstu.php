<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "student_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the 'marks' array is set and contains the expected keys
$sem1 = isset($_POST['marks']['sem1']) ? $_POST['marks']['sem1'] : 0;
$sem2 = isset($_POST['marks']['sem2']) ? $_POST['marks']['sem2'] : 0;
$sem3 = isset($_POST['marks']['sem3']) ? $_POST['marks']['sem3'] : 0;
$sem4 = isset($_POST['marks']['sem4']) ? $_POST['marks']['sem4'] : 0;
$sem5 = isset($_POST['marks']['sem5']) ? $_POST['marks']['sem5'] : 0;
$sem6 = isset($_POST['marks']['sem6']) ? $_POST['marks']['sem6'] : 0;
$sem7 = isset($_POST['marks']['sem7']) ? $_POST['marks']['sem7'] : 0;
$sem8 = isset($_POST['marks']['sem8']) ? $_POST['marks']['sem8'] : 0;

// Prepare an SQL statement
$stmt = $conn->prepare("
    INSERT INTO students (regNumber, name, dob, fatherName, motherName, contact, email, skills, interests, sem1, sem2, sem3, sem4, sem5, sem6, sem7, sem8, cgpa)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");

// Check if the statement was prepared successfully
if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

// Bind parameters (s for string, d for double)
$stmt->bind_param(
    "sssssssssssssssssd",
    $regNumber, $name, $dob, $fatherName, $motherName, $contact, $email,
    $skills, $interests, $sem1, $sem2, $sem3, $sem4, $sem5, $sem6, $sem7, $sem8, $cgpa
);

// Retrieve data from POST request
$regNumber = $_POST['regNumber'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$fatherName = $_POST['fatherName'];
$motherName = $_POST['motherName'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$skills = $_POST['skills'];
$interests = $_POST['interests'];
$cgpa = $_POST['cgpa'];

// Execute the statement
if ($stmt->execute()) {
    echo "New student information added successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
