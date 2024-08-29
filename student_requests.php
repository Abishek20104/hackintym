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

// Fetch student requests from the database
$sql = "SELECT student_name, year, request_type, description FROM requests";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOD</title>
    <link rel="stylesheet" href="Sidebar.css">
    <style>
        .container {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .actions button {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .accept-btn {
            background-color: #4CAF50;
            color: white;
        }
        .reject-btn {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <img src="Img/profile.jpg" alt="Profile Picture" class="profile-pic">
                <h2>Sairam J</h2>
            </div>
            <ul>
                <li><a href="HOD.html">Profile</a></li>
                <li><a href="request.html">OD/Gatepass/Leave Request</a></li>
                <li><a href="#english">Feed</a></li>
                <li><a href="AddFaculty.html">Add / Edit</a></li>
            </ul>
        </div>
        <div class="container123">
            <h1>Student Requests</h1>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Request Type</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["student_name"] . "</td>";
                            echo "<td>" . $row["year"] . "</td>";
                            echo "<td>" . $row["request_type"] . "</td>";
                            echo "<td>" . $row["description"] . "</td>";
                            echo '<td class="actions">
                                      <button class="accept-btn" onclick="handleAccept()">Accept</button>
                                      <button class="reject-btn" onclick="handleReject()">Reject</button>
                                  </td>';
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No requests found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
