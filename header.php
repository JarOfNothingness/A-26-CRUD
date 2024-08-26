<?php
// Start PHP with no output or whitespace before it

// Example of setting headers if needed
// header("Content-Type: text/html; charset=UTF-8"); // Optional: Define content type

// Ensure no HTML or output before this
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students Masterlist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 60px; /* Initial width showing only icons */
            background-color: #333;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            transition: width 0.3s;
            overflow-x: hidden;
            white-space: nowrap;
        }

        .sidebar:hover {
            width: 250px; /* Expand on hover */
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .sidebar a span {
            display: none; /* Hide text initially */
            margin-left: 10px;
        }

        .sidebar:hover a span {
            display: inline; /* Show text on hover */
        }

        .main-content {
            margin-left: 60px;
            padding: 20px;
            width: calc(100% - 60px);
            transition: margin-left 0.3s, width 0.3s;
        }

        .sidebar:hover ~ .main-content {
            margin-left: 250px;
            width: calc(100% - 250px);
        }

        .dashboard-header {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            font-size: 32px;
        }

        .form-links {
            position: fixed;
            top: 20px;
            right: 20px;
        }

        .form-links a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }
    </style>
</head>
<body>

 
    <div class="sidebar">
        <a href="../Home/dashboard.php">
            <img src="../Home/Images/home-icon.png" alt="Home" style="width:30px;">
            <span>Dashboard</span>
        </a>
        <a href="../crud/Crud.php">
            <img src="../Home/Images/students-icon.png" alt="Students" style="width:30px;">
            <span>Masterlist</span>
        </a>
        <a href="../Home/ClassRecord.php">
            <img src="../Home/Images/grades-icon.png" alt="Grades" style="width:30px;">
            <span>ClassRecords</span>
        </a>
        <a href="../Home/Attendance.php">
            <img src="../Home/Images/grades-icon.png" alt="Grades" style="width:30px;">
            <span>Attendance</span>
        </a>
        <a href="../Home/GradingSystem.php">
            <img src="../Home/Images/grades-icon.png" alt="Grades" style="width:30px;">
            <span>Grading System</span>
        </a>
        <a href="../Home/FinalGrade.php">
            <img src="../Home/Images/grades-icon.png" alt="Grades" style="width:30px;">
            <span>Final Grade</span>
        </a>
        <a href="../Home/r.php">
            <img src="../Home/Images/grades-icon.png" alt="Grades" style="width:30px;">
            <span>Reports</span>
        </a>
        <a href="../Home/fileserver.php">
            <img src="../Home/Images/files-icon.png" alt="File Server" style="width:30px;">
            <span>File Server</span>
        </a>
        <a href="../Home/fetch_schedules.php">
            <img src="../Home/Images/schedule-icon.png" alt="Schedule" style="width:30px;">
            <span>Schedule</span>
        </a>
        <a href="../Home/manageaccount.php">
            <span>Manage Account</span>
        </a>
        <a href="../Home/logout.php">
            <span>Logout</span>
        </a>
    </div>
    <div class="main-content">