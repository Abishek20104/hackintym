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
                    // Database connection
                    $servername = "localhost";
                    $username = "root";  // Replace with your MySQL username
                    $password = "admin";  // Replace with your MySQL password
                    $dbname = "student_management";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch leave requests
                    $sql = "SELECT student_name, 'IV' AS year, 'Leave' AS request_type, reason AS description FROM leave_requests
                            UNION
                            SELECT student_name, 'IV' AS year, 'OD' AS request_type, reason AS description FROM od_requests
                            UNION
                            SELECT student_name, 'IV' AS year, 'Gatepass' AS request_type, reason AS description FROM gatepass_requests";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["student_name"] . "</td>
                                    <td>" . $row["year"] . "</td>
                                    <td>" . $row["request_type"] . "</td>
                                    <td>" . $row["description"] . "</td>
                                    <td class='actions'>
                                        <button class='accept-btn' onclick=\"handleAccept('" . $row["student_name"] . "')\">Accept</button>
                                        <button class='reject-btn' onclick=\"handleReject('" . $row["student_name"] . "')\">Reject</button>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No requests found</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function handleAccept(studentName) {
            alert('Request accepted for ' + studentName);
            // Add your logic for accepting the request
        }

        function handleReject(studentName) {
            alert('Request rejected for ' + studentName);
            // Add your logic for rejecting the request
        }
    </script>
</body>
</html>
