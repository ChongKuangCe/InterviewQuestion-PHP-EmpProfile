<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// File to store employee data
$employeeDataFile = 'employees.json';

// Check if the file exists and is not empty
if (file_exists($employeeDataFile)) {
    $employeeData = json_decode(file_get_contents($employeeDataFile), true);
} else {
    $employeeData = [];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profiles</title>
    <style>
        /* Common Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 1em 0;
        }

        h1 {
            margin: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Button Styles */
        .add-btn {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .add-btn:hover {
            background-color: #45a049;
        }

        /* Empty Employees Message */
        .no-employees {
            color: #888;
            font-size: 18px;
            text-align: center;
            margin-top: 50px;
        }

        /* Page Design */
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            table, th, td {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Employee Profiles</h1>
    </header>

    <div class="container">
        <a href="index.html" class="add-btn">Add New Employee</a>

        <?php if (empty($employeeData)): ?>
            <p class="no-employees">No employees found. Please add some profiles.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Marital Status</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Date of Birth</th>
                        <th>Nationality</th>
                        <th>Hire Date</th>
                        <th>Department</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($employeeData as $employee): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($employee['name']); ?></td>
                            <td><?php echo htmlspecialchars($employee['gender']); ?></td>
                            <td><?php echo htmlspecialchars($employee['marital_status']); ?></td>
                            <td><?php echo htmlspecialchars($employee['phone']); ?></td>
                            <td><?php echo htmlspecialchars($employee['email']); ?></td>
                            <td><?php echo htmlspecialchars($employee['address']); ?></td>
                            <td><?php echo htmlspecialchars($employee['dob']); ?></td>
                            <td><?php echo htmlspecialchars($employee['nationality']); ?></td>
                            <td><?php echo htmlspecialchars($employee['hire_date']); ?></td>
                            <td><?php echo htmlspecialchars($employee['department']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

</body>
</html>
