<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOD - Student Requests</title>
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
        .request-count {
            font-size: 1.2em;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <?php include 'fetch_requests.php'; ?>
    
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
            <div class="request-count">
                <p>Leave Requests: <?php echo $leaveCount; ?></p>
                <p>OD Requests: <?php echo $odCount; ?></p>
                <p>Gatepass Requests: <?php echo $gatepassCount; ?></p>
            </div>
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
                    <?php foreach ($requests as $request): ?>
                    <tr>
                        <td><?php echo $request['student_name']; ?></td>
                        <td><?php echo $request['year']; ?></td>
                        <td><?php echo $request['type']; ?></td>
                        <td><?php echo $request['reason']; ?></td>
                        <td class="actions">
                            <button class="accept-btn" onclick="handleAccept('<?php echo $request['student_name']; ?>')">Accept</button>
                            <button class="reject-btn" onclick="handleReject('<?php echo $request['student_name']; ?>')">Reject</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function handleAccept(studentName) {
            alert("Accepted request from " + studentName);
            // Implement AJAX call to update the database if needed
        }

        function handleReject(studentName) {
            alert("Rejected request from " + studentName);
            // Implement AJAX call to update the database if needed
        }
    </script>
</body>
</html>
