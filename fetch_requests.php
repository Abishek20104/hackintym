<?php
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = "admin"; // Replace with your MySQL password
$dbname = "student_management"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL Queries to count requests
$leaveQuery = "SELECT COUNT(*) as count FROM leave_requests";
$odQuery = "SELECT COUNT(*) as count FROM od_requests";
$gatepassQuery = "SELECT COUNT(*) as count FROM gatepass_requests";

$leaveResult = $conn->query($leaveQuery);
$odResult = $conn->query($odQuery);
$gatepassResult = $conn->query($gatepassQuery);

$leaveCount = $leaveResult->fetch_assoc()['count'];
$odCount = $odResult->fetch_assoc()['count'];
$gatepassCount = $gatepassResult->fetch_assoc()['count'];

// SQL Query to fetch all requests
$requestsQuery = "
SELECT * FROM leave_requests
UNION ALL
SELECT * FROM od_requests
UNION ALL
SELECT * FROM gatepass_requests
";

$requestsResult = $conn->query($requestsQuery);

$requests = [];

if ($requestsResult->num_rows > 0) {
    while($row = $requestsResult->fetch_assoc()) {
        $requests[] = $row;
    }
}

$conn->close();
?>
