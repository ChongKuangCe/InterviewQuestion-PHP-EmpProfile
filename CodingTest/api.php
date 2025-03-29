<?php
header('Content-Type: application/json');

$employeeDataFile = 'employees.json';
$employees = file_exists($employeeDataFile) ? json_decode(file_get_contents($employeeDataFile), true) : [];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Return all employee data
    echo json_encode($employees);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Add a new employee
    $newEmployee = json_decode(file_get_contents('php://input'), true);

    // Validate and add data
    $employees[] = $newEmployee;
    file_put_contents($employeeDataFile, json_encode($employees, JSON_PRETTY_PRINT));

    echo json_encode(['message' => 'Employee added successfully']);
}
?>
