<?php
// Data will be saved in JSON file
$employeeDataFile = 'employees.json';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $employee = [
        'name' => $_POST['name'],
        'gender' => $_POST['gender'],
        'marital_status' => $_POST['marital_status'],
        'phone' => $_POST['phone'],
        'email' => $_POST['email'],
        'address' => $_POST['address'],
        'dob' => $_POST['dob'],
        'nationality' => $_POST['nationality'],
        'hire_date' => $_POST['hire_date'],
        'department' => $_POST['department']
    ];

    // Validate data (basic validation)
    if (empty($employee['name']) || empty($employee['email']) || !filter_var($employee['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Invalid data. Please check your inputs.";
        exit;
    }

    // Load existing employee data from JSON file (if exists)
    $existingData = file_exists($employeeDataFile) ? json_decode(file_get_contents($employeeDataFile), true) : [];

    // Add new employee to the data
    $existingData[] = $employee;

    // Save updated data to JSON file
    if (file_put_contents($employeeDataFile, json_encode($existingData, JSON_PRETTY_PRINT))) {
        echo "Employee profile saved successfully!";
    } else {
        echo "Failed to save the data.";
    }
}
?>
